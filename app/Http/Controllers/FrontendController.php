<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class FrontendController extends Controller
{
       public function index(){
           $artikel = Artikel::get();
           return view ('index', compact('artikel'));
       }
        public function shop(){
           $artikel = Artikel::get();
           return view ('shop', compact('artikel'));
       }
       public function suplemen(){
           $suplemen = Suplemen::get();
           return view ('suplemen', compact('suplemen'));
       }
}
