@extends('layouts.conquer')
@section('content')
<h2>Rata rata harga setiap medicines</h2> 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama Kategori</th>
        <th>rata-rata</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $li)
      <tr>
        <td>{{ $li->name }}</td>
        <td>{{ $li->ratarata }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
