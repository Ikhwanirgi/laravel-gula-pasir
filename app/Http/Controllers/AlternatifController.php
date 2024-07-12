<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::all();
        return view('Alternatif.index', ['alternatifList' => $alternatif]);
    }

    public function create()
    {
        return view('Alternatif.create');
    }

    public function store(Request $request)
    {
        $data = new Alternatif;
        $data->nama = $request->nama;
        $data->jumlah_penduduk = $request->jumlah_penduduk;
        $data->jumlah_permintaan = $request->jumlah_permintaan;
        $data->jumlah_pabrik = $request->jumlah_pabrik;
        $data->luas_wilayah = $request->luas_wilayah;
        $data->luas_perkebunan = $request->luas_perkebunan;
        $data->save();
        return redirect('alternatif')->with('inserted', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        return view('Alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, $id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->nama = $request->nama;
        $alternatif->jumlah_penduduk = $request->jumlah_penduduk;
        $alternatif->jumlah_permintaan = $request->jumlah_permintaan;
        $alternatif->jumlah_pabrik = $request->jumlah_pabrik;
        $alternatif->luas_wilayah = $request->luas_wilayah;
        $alternatif->luas_perkebunan = $request->luas_perkebunan;
        $alternatif->save();
        return redirect('alternatif')->with('updated', 'Data Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->delete();
        return redirect('alternatif')->with('deleted', 'Data Berhasil Dihapus');
    }
}
