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
        <h1 class="flex justify-center font-bold text-white text-3xl mt-16 mb-10">Tampil Data Golongan</h1>
        <div class="flex justify-between mt-5">
            <form action="/golongan">
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-slate-700 w-full border rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm text-slate-300" placeholder="Search golongan..." type="text" name="search" value="{{ request('search') }}"/>
                    <span class="absolute inset-y-0 right-5 flex items-center pl-2">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </button>
                    </span>
                </label>
            </form>
            <a href="/golongan/create" class="my-auto text-teal-300 hover:text-teal-500 transition-all">+ Tambah data</a>
        </div>
        <table class="mt-5 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-center">
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Kode Golongan
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Golongan
                </th>
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($golongan as $g)
            <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white counterCell">
                </th>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $g->id }}
                </th>
                <td class="py-4 px-6">
                    {{ $g->nama_golongan }}
                </td>
                <td class="py-4 px-6 flex">
                    <a href="/golongan/{{ $g->id }}/edit" class="px-2 font-medium dark:text-orange-300 text-blue-500 hover:underline">Edit</a>
                    <form action="/golongan/{{ $g->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="confirmDelete(event)" type="submit" class="px-2 font-medium dark:text-red-500 text-blue-500 hover:underline">Hapus</button>
                    </form>
                    <a href="/golongan/{{$g->id}}" class="px-2 font-medium dark:text-blue-600 text-blue-500 hover:underline">Detail</a>
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


    function confirmDelete(e) {
 if(confirm('Are you sure you want to delete this golongan?'))
   alert('Golongan deleted.');
 else {
  e.preventDefault();
 }
}
</script>

@endsection