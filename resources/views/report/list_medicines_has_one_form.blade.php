@extends('layouts.conquer')
@section('content')
<h2>List Medicines has one form</h2> 
<table class="table table-hover">
  <thead>
    <tr>
      <th>name</th>
      <th>count</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $li)
    <tr>
      <td>{{ $li->generic_name }}</td>
      <td>{{ $li->count }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection