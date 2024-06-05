@extends('layouts.app')

@section('title')
Hapus Customer | Lombok Travel-Go Admin
@endsection

@section('content')
<h3>Hapus Customers</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 50%; margin: 20px auto;">
    <a href={{ url('/customer/destroy/' . $customer->id_customers ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 50%; margin: 20px auto;">
    <a href="/customer">
      No
    </a>
  </button>
</div>
@endsection
