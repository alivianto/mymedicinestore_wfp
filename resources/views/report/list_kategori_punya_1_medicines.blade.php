@extends('layouts.conquer')
@section('content')
<h2>List Kategori punya 1 medicines</h2> 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $li)
      <tr>
        <td>{{ $li->name }}</td>
        <td>{{ $li->description }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
