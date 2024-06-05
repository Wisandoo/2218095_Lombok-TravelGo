@extends('layouts.app')

@section('title')
Edit Customer | Lombok Travel-Go Admin
@endsection

@section('content')
<h3>Edit Customer</h3>
<div class="form-login">
  <form action="{{ url('/customer/update/' . $customer->id_customers) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="customers">Customers</label>
    <input class="input" type="text" name="nama" id="customers" placeholder="Customers"
      value="{{ old('nama', $customer->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="alamat">Alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="Alamat"
      value="{{ old('alamat', $customer->alamat) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jenis_kelamin">/jenis Kelamin</label>
    <input class="input" type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis_kelamin"
      value="{{ old('alamat', $customer->jenis_kelamin) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <textarea class="input" name="deskripsi" id="description"
      placeholder="Description">{{ old('deskripsi', $customer->deskripsi) }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="photo">Photo</label>
    <img src="{{ asset('img_customers/' . $customer->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
