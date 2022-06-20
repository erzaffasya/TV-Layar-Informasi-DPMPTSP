<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    public function index()
    {
        $Informasi = Informasi::all();
        // dd($Informasi);
        return view('admin.Informasi.index', compact('Informasi'));
    }

    public function create()
    {
        return view('admin.Informasi.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'logo' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($request->logo != null) {
            $date = date("his");
            $extension = $request->file('logo')->extension();
            $file_name = "Informasi_$date.$extension";
            $path = $request->file('logo')->storeAs('public/Informasi/Logo', $file_name);
        } else {
            $file_name = null;
        }


        if ($request->file != null) {
            $date = date("his");
            $extension = $request->file('file')->extension();
            $file_name1 = "Informasi_$date.$extension";
            $path = $request->file('file')->storeAs('public/Informasi/File', $file_name1);
        } else {
            $file_name1 = null;
        }


        $Informasi = Informasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'logo' => $file_name,
            'file' => $file_name1,
            'link_redirect' => $request->link_redirect,
        ]);


        return redirect()->route('Informasi.index')
            ->with('success', 'Informasi Berhasil Ditambahkan');
    }

    // public function show($id)
    // {
    //     $Informasi =  Informasi::find($id);
    //     return view('admin.Informasi.review', compact('Informasi'));
    // }


    public function edit($id)
    {
        $Informasi = Informasi::find($id);
        return view('admin.Informasi.edit', compact('Informasi'));
    }

    public function update(Request $request, $id)
    {
        $Informasi = Informasi::findOrFail($id);
        $Informasi->judul = $request->judul;
        $Informasi->deskripsi = $request->deskripsi;
        $Informasi->link_redirect = $request->link_redirect;



        if ($request->has("logo")) {

            Storage::delete("public/Informasi/$Informasi->logo");

            $date = date("his");
            $extension = $request->file('logo')->extension();
            $file_name = "Informasi_$date.$extension";
            $path = $request->file('logo')->storeAs('public/Informasi/Logo', $file_name);

            $Informasi->logo = $file_name;
        }
        if ($request->has("file")) {

            Storage::delete("public/Informasi/$Informasi->file");

            $date = date("his");
            $extension = $request->file('file')->extension();
            $file_name1 = "Informasi_$date.$extension";
            $path = $request->file('file')->storeAs('public/Informasi/File', $file_name1);

            $Informasi->file = $file_name1;
        }

        $Informasi->save();
        return redirect()->route('Informasi.index')
        ->with('success', 'Informasi Berhasil Diubah');
    }

    public function destroy($id)
    {
        $Informasi = Informasi::findOrFail($id);
        Storage::delete("public/Informasi/$Informasi->logo");
        $Informasi->delete();
        return redirect()->route('Informasi.index')
            ->with('success', 'Informasi Berhasil Dihapus');
    }
}
