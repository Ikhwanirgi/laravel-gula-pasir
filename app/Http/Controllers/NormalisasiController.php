<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Normalisasi;

class NormalisasiController extends Controller
{
    public function index()
    {
        $normalisasi = Normalisasi::all();
        return view('Normalisasi.index', ['normalisasiList' => $normalisasi]);
    }
}
