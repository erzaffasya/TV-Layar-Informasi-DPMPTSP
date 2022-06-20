<?php

namespace App\Http\Controllers;

use App\Models\DetailLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DetailLayananController extends Controller
{
    public function index()
    {
        $DetailLayanan = DetailLayanan::all();
        // dd($DetailLayanan);
        return view('admin.DetailLayanan.index', compact('DetailLayanan'));
    }

    public function create()
    {
        return view('admin.DetailLayanan.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',

        ]);

        if($request->gambar != null){
            $date = date("his");
            $extension = $request->file('gambar')->extension();
            $file_name = "DetailLayanan_$date.$extension";
            $path = $request->file('gambar')->storeAs('public/DetailLayanan/Gambar', $file_name);
        }
        else{
            $file_name = null;
        }
        

        if($request->file != null){
            $date = date("his");
            $extension = $request->file('file')->extension();
            $file_name1 = "DetailLayanan_$date.$extension";
            $path = $request->file('file')->storeAs('public/DetailLayanan/Berkas', $file_name1);
        }
        else{
            $file_name1 = null;
        }
       

        $DetailLayanan = DetailLayanan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $file_name,
            'file' => $file_name1,
            'penulis' => $request->penulis,
            'users_id' => Auth::user()->id,
        ]);


        return redirect()->route('DetailLayanan.index')
            ->with('success', 'DetailLayanan Berhasil Ditambahkan');
    }

    // public function show($id)
    // {
    //     $DetailLayanan =  DetailLayanan::find($id);
    //     return view('admin.DetailLayanan.review', compact('DetailLayanan'));
    // }


    public function edit($id)
    {
        $DetailLayanan = DetailLayanan::find($id);
        return view('admin.DetailLayanan.edit', compact('DetailLayanan'));
    }

    public function update(Request $request, $id)
    {
        $DetailLayanan = DetailLayanan::findOrFail($id);
        $DetailLayanan->judul = $request->judul;
        $DetailLayanan->isi = $request->isi;
        $DetailLayanan->penulis = $request->penulis;



        if ($request->has("gambar")) {

            Storage::delete("public/DetailLayanan/$DetailLayanan->gambar");

            $date = date("his");
            $extension = $request->file('gambar')->extension();
            $file_name = "DetailLayanan_$date.$extension";
            $path = $request->file('gambar')->storeAs('public/DetailLayanan/Gambar', $file_name);

            $DetailLayanan->gambar = $file_name;
        }
        if ($request->has("file")) {

            Storage::delete("public/DetailLayanan/$DetailLayanan->file");

            $date = date("his");
            $extension = $request->file('file')->extension();
            $file_name1 = "DetailLayanan_$date.$extension";
            $path = $request->file('file')->storeAs('public/DetailLayanan/Berkas', $file_name1);

            $DetailLayanan->file = $file_name1;
        }

        $DetailLayanan->save();

    }

    public function destroy($id)
    {
        $DetailLayanan = DetailLayanan::findOrFail($id);
        Storage::delete("public/DetailLayanan/$DetailLayanan->gambar");
        $DetailLayanan->delete();
        return redirect()->route('DetailLayanan.index')
            ->with('success', 'DetailLayanan Berhasil Dihapus');
    }
}
