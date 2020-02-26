<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategory;
use App\Suplemen;
use Session;
use Auth;
use File;
class suplemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplemen = Suplemen::with('kategory')->orderBy('created_at','desc')->get();
        return view('backend.suplemen.index', compact('suplemen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $suplemen = Suplemen::all();
        return view('backend.suplemen.create', compact('suplemen'));
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
            'judul' => 'required|unique:suplemens',
            'konten' => 'required|min:50',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $suplemen = new Suplemen();
        $suplemen->judul = $request->judul;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/artikel';
            $filename = Str::random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $suplemen->foto = $filename;
        }
        $suplemen->harga = $request->harga;
        $suplemen->save();
        $suplemen->tag()->attach($request->tag);
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                         . $artikel->judul."</b>"
        ]);
        return redirect()->route('suplemen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
