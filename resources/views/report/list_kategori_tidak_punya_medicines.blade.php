@extends('layouts.conquer')
@section('content')
<h2>List Kategori tidak punya data medicines</h2> 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $li)
      <tr>
        <td>{{ $li->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
