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
                {{ __('Hasil') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red overflow-hidden shadow-sm sm:rounded-lg">


                <div class="p-5 table table-striped table-hover">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Alternatif</th>
                                <th scope="col" class="px-6 py-3">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $normalisasi)
                                <tr class="bg-white border-b">
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->provinsi_id }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->nama }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->hasil }}</td>
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