<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
class HomeController extends Controller
{
    //
    public function index(){
        $data['berita'] = Berita::latest('tanggal')->take(5)->get();
        return view('landing.home', $data);
    }

    public function showBerita($slug){
        $data['berita'] = Berita::where('slug', $slug)->firstOrFail();
        return view('berita.show', $data);
    }
}
