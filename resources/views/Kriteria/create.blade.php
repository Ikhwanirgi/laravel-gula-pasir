@extends('layouts.index')
@section('title', 'Tambah Kriteria')

@section('content')
    <div class="mt-3 col-8 m-auto">
    <h2>Tambah Data Kriteria</h2>
    </div>
    <div class="mt-5 col-8 m-auto">
        <form action="/kriteria/store" method="POST">
            @csrf
            <div class="mb-2">
                <label for="nama">Nama Kriteria</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <div class="mb-2">
                <label for="bobot">Bobot</label>
                <input type="text" name="bobot" class="form-control" id="bobot" placeholder="Contoh : 0.25" required>
                <div id="emailHelp" class="form-text">Gunakan bilangan desimal</div>
            </div>
            <div class="mb-2">
                <label for="label">Label Kriteria</label>
                <select name="label" class="form-control" id="label" required>
                    <option value="" disabled selected>Pilih Salah Satu</option>
                    <option value="Benefit">Benefit</option>
                    <option value="Cost">Cost</option>
                </select>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection