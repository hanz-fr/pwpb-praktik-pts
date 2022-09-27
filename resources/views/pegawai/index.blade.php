@extends('layouts.main')

@section('content')

<div class="mx-auto">
    @if(session()->has('success'))
    <div class="absolute">
        <div class=" bg-green-200 border border-green-400 text-green-700 px-4 py-3 rounded">
            <strong class="font-bold pr-1">Success </strong>
            <span class="block sm:inline px-2">{{ session('success') }}</span>

            <button type="button" onclick="closeAlert(event)">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
    @endif


    <div class="block">
        <h1 class="flex justify-center font-bold text-white text-3xl mt-16">Tampil Data Pegawai</h1>
        <a href="/pegawai/create" class="text-teal-300 hover:text-teal-500 transition-all">+ Tambah data</a>
        <table class="mt-2 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-center">
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    NIP
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama
                </th>
                <th scope="col" class="py-3 px-6">
                    Jenis Kelamin
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Gol
                </th>
                <th scope="col" class="py-3 px-6">
                    Agama
                </th>
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
            <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $p->id }}
                </th>
                <td class="py-4 px-6">
                    {{ $p->nip }}
                </td>
                <td class="py-4 px-6">
                    {{ $p->nama }}
                </td>
                <td class="py-4 px-6">
                    {{ $p->jenis_kelamin }}
                </td>
                <td class="py-4 px-6">
                    {{ $p->status_nikah }}
                </td>
                <td class="py-4 px-6">
                    {{ $p->golongan_id }}
                </td>
                <td class="py-4 px-6">
                    {{ $p->agama }}
                </td>
                <td class="py-4 px-6 flex">
                    <a href="/pegawai/{{ $p->id }}/edit" class="px-2 font-medium dark:text-orange-300 text-blue-500 hover:underline">Edit</a>
                    <form action="/pegawai/{{ $p->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 font-medium dark:text-red-500 text-blue-500 hover:underline">Hapus</button>
                    </form>
                    <a href="/pegawai/{{$p->id}}" class="px-2 font-medium dark:text-blue-600 text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

<script>
    function closeAlert(event) {
        let element = event.target;
        while (element.nodeName !== "BUTTON") {
            element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
    }
</script>

@endsection