<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class AboutController extends Controller
{
    public function showAboutPage()
    {
        $penduduk = Penduduk::all();
        return view('about', ['style' => 'about', 'penduduk' => $penduduk]);
    }

    public function showSelengkapnyaPage()
    {
        return view('selengkapnya', ['style' => 'selengkapnya']);
    }
}
