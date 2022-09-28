@extends('layouts.main')


@section('content')
    <div class="mx-auto my-5 text-start">
        <div class="bg-slate-900 shadow-lg rounded-lg p-5">
            <h1 class="text-white font-bold text-2xl flex justify-center mb-10 bg-slate-800 rounded-lg py-2">Detail Pegawai
            </h1>
            <table class="table bg-slate-900 border-separate border-spacing-y-3 border-spacing-x-10">
                <tbody class="text-white">
                    @if($pegawai->foto)
                    <tr>
                        <div class="flex justify-center">
                            <img class="rounded-lg" src="{{ asset('storage/'.$pegawai->foto) }}" height="200" width="200" alt="pegawai"> 
                        </div>
                    </tr>
                    @else
                    <tr>
                        <div class="flex justify-center">
                            <img class="rounded-lg" src="{{ asset('storage/image/user.jpg') }}" alt="photo" width="200" height="200">
                        </div>
                    </tr>
                    @endif
                    <tr>
                        <td class="px-5 font-bold text-slate-300">ID</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->id }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">NIK</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->nik }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">NIP</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->nip }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Nama</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->nama }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Jenis Kelamin</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Tempat Lahir</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Tanggal Lahir</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Tempat Lahir</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Telpon</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->telpon }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Agama</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->agama }}</td>
                    </tr>
                    <tr>
                        <td class="px-5 font-bold text-slate-300">Alamat</td>
                        <td class="px-5 text-slate-300">{{ $pegawai->alamat }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
