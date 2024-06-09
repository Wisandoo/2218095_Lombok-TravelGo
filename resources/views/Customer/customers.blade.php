@extends('layouts.app')

@section('title')
Customers | Lombok Travel-Go Admin
@endsection

@section('content')
<h3>Customers</h3>
<button type="button" class="btn btn-tambah">
  <a href="/customer/tambah">Tambah Data</a>
</button>
<button type="button" class="btn"><a href="/customer/cetak">Cetak</a></button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col" style="width: 20%">Photo</th>
        <th>Customer</th>
        <th scope="col" style="width: 15%">Alamat</th>
        <th scope="col" style="width: 15%">Jenis Kelamin</th>
        <th scope="col" style="width: 15%">Deskripsi</th>
        <th scope="col" style="width: 20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($customers as $customer)
    <tr>
      <td><img src="{{ asset('img_customers/' . $customer->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $customer->nama }}</td>
      <td>{{ $customer->alamat}}</td>
      <td>{{ $customer->jenis_kelamin}}</td>
      <td>{{ $customer->deskripsi }}</td>
      <td>
        <a class='btn-edit' href="/customer/edit/{{ $customer->id_customers }}">Edit</a>
        |
        <a class='btn-delete' href="/customer/hapus/{{ $customer->id_customers }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="10" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
