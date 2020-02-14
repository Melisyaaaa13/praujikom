<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Kategory;
use App\Tag;
use App\Artikel;
use Session;
use Auth;
use File;
class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::with('kategory', 'tag')->orderBy('created_at','desc')->get();
        return view('backend.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = Kategory::all();
        $tag = Tag::all();
        // dd($tag);
        return view('backend.artikel.create', compact('kat','tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:artikels',
            'konten' => 'required|min:50',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'id_kategori' => 'required',
            'tag' => 'required'
        ]);
        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->slug = Str::slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/artikel';
            $filename = Str::random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $artikel->foto = $filename;
        }
        $artikel->harga = $request->harga;
        $artikel->save();
        $artikel->tag()->attach($request->tag);
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                         . $artikel->judul."</b>"
        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $artikel = artikel::findOrFail($id);
         return view('backend.artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrfail($id);
        $kat = Kategory::all();
        $tag = Tag::all();
        $select = $artikel->tag->pluck('id')->toArray();
        return view('backend.artikel.edit', compact('artikel','kat','select','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required|min:50',
            'id_kategori' => 'required',
            'tag' => 'required'
        ]);
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = Str::slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/artikel/';
            $filename = Str::random(6) . '_'
            . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,$filename
            );
            // hapus foto lama jika ada
            if ($artikel->foto) {
                $old_foto = $artikel->foto;
                $filepath = public_path() .
                    '/assets/img/artikel/' .
                    $artikel->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->tag()->sync($request->tag);
        $artikel->harga = $request->harga;

        $artikel->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil edit <b>"
                         . $artikel->judul."</b>"
        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = artikel::findOrFail($id);
        $blog = artikel::findOrfail($id);
        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path()
            . '/assets/img/artikel/' . $artikel->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        $artikel->tag()->detach($artikel->id);
        $artikel->delete();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menghapus <b>"
                         . $blog ->judul."</b>"
        ]);
        return redirect()->route('artikel.index');
    }
}
