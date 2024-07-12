
<x-app-layout>
<x-slot name="header">
    <div class="">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Edit Alternatif') }}
        </h2>

    </div>

    <div class="m-5 py-10">
        <div class="mt-5 w-1/2 col-8 m-auto">
            <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" value="{{$alternatif->nama}}" name="nama" class="w-full" id="nama"  required>
                </div>
                <div class="mb-2">
                    <label for="jumlah_penduduk">Jumlah Penduduk</label>
                    <input type="text" value="{{$alternatif->jumlah_penduduk}}" name="jumlah_penduduk" class="w-full" id="jumlah_penduduk" required>
                </div>
                <div class="mb-2">
                    <label for="jumlah_permintaan">Jumlah Permintaan</label>
                    <input type="text" value="{{$alternatif->jumlah_permintaan}}" name="jumlah_permintaan" class="w-full" id="jumlah_permintaan" required>
                </div>
                <div class="mb-2">
                    <label for="jumlah_pabrik">Jumlah Pabrik</label>
                    <input type="text" value="{{$alternatif->jumlah_pabrik}}" name="jumlah_pabrik" class="w-full" id="jumlah_pabrik" required>
                </div>
                <div class="mb-2">
                    <label for="luas_wilayah">Luas Wilayah</label>
                    <input type="text" value="{{$alternatif->luas_wilayah}}" name="luas_wilayah" class="w-full" id="luas_wilayah" required>
                </div>
                <div class="mb-2">
                    <label for="luas_perkebunan">Luas Perkebunan</label>
                    <input type="text" value="{{$alternatif->luas_perkebunan}}" name="luas_perkebunan" class="w-full" id="luas_perkebunan" required>
                </div>
                <div class="mt-5">
                    <button type="submit" class="px-5 py-3 bg-green-500 text-white">Simpan</button>
                </div>
            </form>
        </div>        
    </div>
</x-slot>
</x-app-layout>
