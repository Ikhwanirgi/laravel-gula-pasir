<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;

class HasilController extends Controller
{
    public function index()
    {
        $hasil = Hasil::all();
        return view('Hasil.index', compact('hasil'));
    }
}
