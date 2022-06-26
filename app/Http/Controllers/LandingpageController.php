<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function IndexLayanan()
    {
        $Layanan = Layanan::all();
        // dd($Informasi);
        return view('landingpage.layanan.index', compact('Layanan'));
    }
    public function DetailLayanan($id)
    {
        $Layanan = Layanan::find($id);
        // dd($Informasi);
        return view('landingpage.layanan.detailLayanan', compact('Layanan'));
    }

    public function IndexInformasi()
    {
        $Informasi = Informasi::all();
        // dd($Informasi);
        return view('landingpage.informasi.index', compact('Informasi'));
    }
    public function DetailInformasi($id)
    {
        $Informasi = Informasi::find($id);
        // dd($Informasi);
        return view('landingpage.informasi.detailInformasi', compact('Informasi'));
    }
}
