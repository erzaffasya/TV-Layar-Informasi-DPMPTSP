<?php

namespace App\Http\Controllers;

use App\Models\DetailLayanan;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $Layanan = Layanan::orderBy('urut','ASC')->get();
        return view('admin.Layanan.index', compact('Layanan'));
    }

    public function create()
    {
        return view('admin.Layanan.tambah');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_layanan' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->logo != null) {
            $date = date("his");
            $extension = $request->file('logo')->extension();
            $file_name = "Layanan_$date.$extension";
            $path = $request->file('logo')->storeAs('public/Layanan/Logo', $file_name);
        } else {
            $file_name = null;
        }


        if ($request->foto != null) {
            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name1 = "Layanan_$date.$extension";
            $path = $request->file('foto')->storeAs('public/Layanan/Foto', $file_name1);
        } else {
            $file_name1 = null;
        }


        $Layanan = Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'lokasi' => $request->lokasi,
            'logo' => $file_name,
            'foto' => $file_name1,
            'deskripsi' => $request->deskripsi,
            'persyaratan' => $request->persyaratan,
            'senin_kamis' => $request->senin_kamis,
            'jumat' => $request->jumat,
            'urut' => $request->urut,
        ]);


        return redirect()->route('Layanan.index')
            ->with('success', 'Layanan Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $DetailLayanan = DetailLayanan::where('layanan_id', $id)->get();
        $Layanan =  Layanan::find($id);
        return view('admin.Layanan.DetailLayanan.index', compact('Layanan','DetailLayanan'));
    }


    public function edit($id)
    {
        $Layanan = Layanan::find($id);
        return view('admin.Layanan.edit', compact('Layanan'));
    }

    public function update(Request $request, $id)
    {
        $Layanan = Layanan::findOrFail($id);
        $Layanan->nama_layanan = $request->nama_layanan;
        $Layanan->lokasi = $request->lokasi;
        $Layanan->deskripsi = $request->deskripsi;
        $Layanan->persyaratan = $request->persyaratan;
        $Layanan->senin_kamis = $request->senin_kamis;
        $Layanan->jumat = $request->jumat;
        $Layanan->urut = $request->urut;

        if ($request->has("logo")) {

            Storage::delete("public/Layanan/$Layanan->logo");

            $date = date("his");
            $extension = $request->file('logo')->extension();
            $file_name = "Layanan_$date.$extension";
            $path = $request->file('logo')->storeAs('public/Layanan/Logo', $file_name);

            $Layanan->logo = $file_name;
        }
        if ($request->has("file")) {

            Storage::delete("public/Layanan/$Layanan->file");

            $date = date("his");
            $extension = $request->file('file')->extension();
            $file_name1 = "Layanan_$date.$extension";
            $path = $request->file('file')->storeAs('public/Layanan/Foto', $file_name1);

            $Layanan->foto = $file_name1;
        }

        $Layanan->save();
        return redirect()->route('Layanan.index')
        ->with('success', 'Layanan Berhasil Diubah');
    }

    public function destroy($id)
    {
        $Layanan = Layanan::findOrFail($id);
        Storage::delete("public/Layanan/$Layanan->logo");
        $Layanan->delete();
        return redirect()->route('Layanan.index')
            ->with('success', 'Layanan Berhasil Dihapus');
    }
}
