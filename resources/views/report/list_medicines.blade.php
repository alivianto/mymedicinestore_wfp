@extends('layouts.conquer')
@section('content')
<h2>List Medicines</h2> 
<table class="table table-hover">
  <thead>
    <tr>
      <th>generic_name</th>
      <th>form</th>
      <th>price</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $li)
    <tr>
      <td>{{ $li->generic_name }}</td>
      <td>{{ $li->form }}</td>
      <td>{{ $li->price }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
