<x-app-layout>
<x-slot name="header">
    <div class="">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Edit kriteria') }}
        </h2>

    </div>

    <div class="m-5 py-10">
        <div class="mt-5 w-1/2 col-8 m-auto">
            <form action="{{ route('kriteria.update', $kriteriaList->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" value="{{$kriteriaList->nama}}" name="nama" class="w-full" id="nama"  required>
                </div>
                <div class="mb-2">
                    <label for="bobot">Bobot</label>
                    <input type="text" value="{{$kriteriaList->bobot}}" name="bobot" class="w-full" id="jumlah_penduduk" required>
                </div>
                <div class="mb-2">
                    <label for="label">Label</label>
                    <input type="text" value="{{$kriteriaList->label}}" name="label" class="w-full" id="jumlah_permintaan" required>
                </div>
                <div class="mt-5">
                    <button type="submit" class="px-5 py-3 bg-green-500 text-white">Simpan</button>
                </div>
            </form>
        </div>        
    </div>
</x-slot>
</x-app-layout>
