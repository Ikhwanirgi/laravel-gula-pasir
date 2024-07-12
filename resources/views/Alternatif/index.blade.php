<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saw Gula pasir  | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <div class="flex  items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Alternatif') }}
            </h2>
            <a href="/alternatif/create" class="px-3 py-2  bg-green-500 text-white">+ Tambah Alternatif</a>

        </div>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red overflow-hidden shadow-sm sm:rounded-lg">


                <div class="p-5 table table-striped table-hover">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Nama</th>
                                <th scope="col" class="px-6 py-3">Jumlah Penduduk</th>
                                <th scope="col" class="px-6 py-3">Jumlah Permintaan</th>
                                <th scope="col" class="px-6 py-3">Jumlah Pabrik</th>
                                <th scope="col" class="px-6 py-3">Luas Wilayah</th>
                                <th scope="col" class="px-6 py-3">Luas Perkebunan</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatifList as $alternatif)
                                <tr class="bg-white border-b">
                                    <td scope="row" class="px-6 py-4">{{ $alternatif->id }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $alternatif->nama }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $alternatif->jumlah_penduduk }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $alternatif->jumlah_permintaan }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $alternatif->jumlah_pabrik }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $alternatif->luas_wilayah }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $alternatif->luas_perkebunan }}</td>
                                    <td scope="row" class="px-6 py-4 flex gap-3">
                                        <a href="/alternatif/edit/{{ $alternatif->id }}" class="px-3 py-2 bg-green-200">Edit</a>
                                        
                                        <form action="{{route('alternatif.destroy', $alternatif->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-2 bg-red-200">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
