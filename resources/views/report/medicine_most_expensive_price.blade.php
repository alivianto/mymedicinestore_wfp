@extends('layouts.conquer')
@section('content')
<h3>Obat yang memiliki harga termahal</h3><br>
    <p>Nama Obat: {{ $data[0]["generic_name"] }}</p>
    <p>Nama Kategori: {{ $data[0]["name"] }} </p>
    <p>Harga: {{ $data[0]["price"] }}</p>
@endsection