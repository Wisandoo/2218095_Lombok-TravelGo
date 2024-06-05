@extends('layouts.app')

@section('title')
Tambah Customer | Lombok Travel-Go Admin
@endsection

@section('content')
<h3>Input Customer</h3>
<div class="form-login">
  <form action="{{ url('/customer/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="customers">Customers</label>
    <input class="input" type="text" name="nama" id="customers" placeholder="customers" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="alamat">Alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat') }}" />
    @error('alamat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input class="input" type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis_kelamin" value="{{ old('jenis_kelamin') }}" />
    @error('jenis_kelamin')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <textarea class="input" name="deskripsi" id="description" placeholder="Description">{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
