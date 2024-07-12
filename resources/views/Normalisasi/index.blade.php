<x-app-layout>
    <x-slot name="header">
        <div class="flex  items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Normalisasi') }}
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
                                <th scope="col" class="px-6 py-3">Jumlah Penduduk</th>
                                <th scope="col" class="px-6 py-3">Jumlah Permintaan</th>
                                <th scope="col" class="px-6 py-3">Jumlah Pabrik</th>
                                <th scope="col" class="px-6 py-3">Luas Wilayah</th>
                                <th scope="col" class="px-6 py-3">Luas Perkebunan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normalisasiList as $normalisasi)
                                <tr class="bg-white border-b">
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->provinsi_id }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->nama }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->r1 }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->r2 }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->r3 }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->r4 }}</td>
                                    <td scope="row" class="px-6 py-4">{{ $normalisasi->r5 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
