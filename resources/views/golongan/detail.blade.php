@extends('layouts.main')


@section('content')
    <div class="mx-auto my-5 text-start">
        <div class="bg-slate-900 shadow-lg rounded-lg p-5">
            <h1 class="text-white font-bold text-2xl flex justify-center mb-10 bg-slate-800 rounded-lg py-2">Detail Golongan
            </h1>
            <table class="table bg-slate-900 border-separate border-spacing-y-3 border-spacing-x-10">
                <tbody class="text-white">
                    <tr>
                        <td class="px-5 font-bold text-slate-300">ID</td>
                        <td class="px-5 text-slate-300">{{ $golongan->id }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">NIK</td>
                        <td class="px-5 text-slate-300">{{ $golongan->nama_golongan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
