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
        return view('admin.Layanan.DetailLayanan.index', compact('DetailLayanan'));
    }

    public function create()
    {
        return view('admin.Layanan.DetailLayanan.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_layanan' => 'required',
            'deskripsi' => 'required',

        ]);

        if($request->foto != null){
            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "DetailLayanan_$date.$extension";
            $path = $request->file('foto')->storeAs('public/DetailLayanan/Foto', $file_name);
        }
        else{
            $file_name = null;
        }
        

        if($request->file != null){
            $date = date("his");
            $extension = $request->file('file')->extension();
            $file_name1 = "DetailLayanan_$date.$extension";
            $path = $request->file('file')->storeAs('public/DetailLayanan/File', $file_name1);
        }
        else{
            $file_name1 = null;
        }
       

        $DetailLayanan = DetailLayanan::create([
            'layanan_id' => $request->layanan_id,
            'jenis_layanan' => $request->jenis_layanan,
            'deskripsi' => $request->deskripsi,
            'foto' => $file_name,
            'file' => $file_name1,
        ]);


        return back()
            ->with('success', 'DetailLayanan Berhasil Ditambahkan');
    }

    // public function show($id)
    // {
    //     $DetailLayanan =  DetailLayanan::find($id);
    //     return view('admin.Layanan.DetailLayanan.review', compact('DetailLayanan'));
    // }


    public function edit($id)
    {
        $DetailLayanan = DetailLayanan::find($id);
        return view('admin.Layanan.DetailLayanan.edit', compact('DetailLayanan'));
    }

    public function update(Request $request, $id)
    {
        $DetailLayanan = DetailLayanan::findOrFail($id);
        $DetailLayanan->jenis_layanan = $request->jenis_layanan;
        $DetailLayanan->deskripsi = $request->deskripsi;



        if ($request->has("foto")) {

            Storage::delete("public/DetailLayanan/$DetailLayanan->foto");

            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "DetailLayanan_$date.$extension";
            $path = $request->file('foto')->storeAs('public/DetailLayanan/foto', $file_name);

            $DetailLayanan->foto = $file_name;
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
        return redirect()->route('Layanan.show',$DetailLayanan->layanan_id);

    }

    public function destroy($id)
    {
        $DetailLayanan = DetailLayanan::findOrFail($id);
        Storage::delete("public/DetailLayanan/$DetailLayanan->foto");
        $DetailLayanan->delete();
        return back()
            ->with('success', 'DetailLayanan Berhasil Dihapus');
    }
}
