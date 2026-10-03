<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    //
    public function index(){
        $data['berita'] = Berita::all();
        return view('admin.berita.index', $data);
    }

    public function create(){
        return view('admin.berita.create');
    }

    public function store(Request $request){
        $slug = Str::slug($request->judul);
        $request->merge(['slug' => $slug]);

        $request->validate([
            'judul' => 'required|string|max:50',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|unique:berita,slug'
        ],[
            'judul.required' => 'Judul berita harus diisi.',
            'judul.max' => 'Judul berita tidak boleh lebih dari 50 karakter.',
            'isi.required' => 'Isi berita harus diisi.',
            'tanggal.required' => 'Tanggal berita harus diisi.',
            'tanggal.date' => 'Tanggal berita harus berupa tanggal yang valid.',
            'gambar.image' => 'Gambar harus berupa file gambar.',
            'gambar.mimes' => 'Gambar harus berupa file dengan format: jpeg, png, jpg, gif, svg.',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'slug.unique' => 'Slug berita sudah digunakan. Silakan gunakan judul yang berbeda.'
        ]);

        if($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->store('berita', 'public');
        } else {
            $filename = null;
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'gambar' => $filename,
            'id_user' => auth()->user()->id_user,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}
