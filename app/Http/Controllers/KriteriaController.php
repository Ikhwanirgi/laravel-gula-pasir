<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('Kriteria.index', ['kriteriaList' => $kriteria]);
    }

    public function create()
    {
        return view('Kriteria.create');
    }

    public function store(Request $request)
    {
        $data = new Kriteria;
        $data->nama = $request->nama;
        $data->bobot = $request->bobot;
        $data->label = $request->label;
        $data->save();
        return redirect('kriteria')->with('inserted', 'Data Berhasil Ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $data = Kriteria::findOrFail($id);
        return view('Kriteria.edit', ['kriteriaList' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Kriteria::findOrFail($id);
        $data->nama = $request->nama;
        $data->bobot = $request->bobot;
        $data->label = $request->label;
        $data->save();
        return redirect('kriteria')->with('updated', 'Data Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $data = Kriteria::find($id);
        $data->delete();
        return redirect('kriteria')->with('deleted', 'Data Berhasil Dihapus');
    }
}
