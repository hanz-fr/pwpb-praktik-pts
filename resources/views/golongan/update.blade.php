@extends('layouts.main')

@section('content')
<div class="mx-auto my-10">
    <div class="block p-6 bg-slate-900 rounded-lg" style="width: 600px">
    <form action="/golongan/{{ $golongan->id }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group mb-6 ">
        <h1 class="flex justify-center mb-5 text-white font-bold">Edit Golongan</h1>
        <label for="id" class="form-label inline-block mb-2 text-gray-500">ID Golongan</label>
        <input value="{{ old('id', $golongan->id) }}" name="id" type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          @error('id')
          border-red-400
          @enderror
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="id" placeholder=". . .">
          @error('id')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>

      <div class="form-group mb-6 ">
        <label for="nama_golongan" class="form-label inline-block mb-2 text-gray-500">Nama Golongan</label>
        <input required value="{{ old('nama_golongan', $golongan->nama_golongan) }}" name="nama_golongan" type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          @error('nama_golongan')
          border-red-400
          @enderror
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="nama_golongan" placeholder=". . .">
          @error('nama_golongan')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>
      
      

      <button type="submit" class="
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Submit</button>
    </form>
  </div>
</div>

@endsection