@extends('layouts.main')


@section('content')
<div class="flex-1">
<table class="table bg-slate-900">
    <tbody class="text-white">
    @foreach ($pegawai as $p)
      <tr>
        <td>ID</td>
        <td>{{ $p->id }}</td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>{{ $p->nik }}</td>
      </tr>
      <tr>
        <td>NIP</td>
        <td>{{ $p->nip }}</td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>{{ $p->nama }}</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $p->jenis_kelamin }}</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>{{ $p->tempat_lahir }}</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>{{ $p->tanggal_lahir }}</td>
      </tr>
      <tr>
        <td>Telpon</td>
        <td>{{ $p->telpon }}</td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>{{ $p->agama }}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>{{ $p->alamat }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection