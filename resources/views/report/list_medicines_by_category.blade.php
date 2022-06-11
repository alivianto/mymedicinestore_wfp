@extends('layouts.conquer')
@section('content')
@if($namecategory != '')
  <h2>List Medicine by Category</h2>
  <p>ID Category: {{ $id_category }} with name: {{ $namecategory }}</p>       
  <hr>
  <p>Total rows: {{ $getTotalData }}</p>     
  <table class="table table-hover">
    <thead>
      <tr>
        <th>generic_name</th>
        <th>form</th>
        <th>restriction_formula</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($result as $li)
      <tr>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->price }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <h1>Tidak ada data</h1>
  @endif
@endsection