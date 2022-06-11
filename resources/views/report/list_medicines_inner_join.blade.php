@extends('layouts.conquer')
@section('content')
<h2>List Medicines Inner Join Category</h2>
{{-- List Medicines (Table) --}}    
<table class="table table-hover">
  <thead>
    <tr>
      <th>generic_name</th>
      <th>form</th>
      <th>category name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $li)
    <tr>
      <td>{{ $li->generic_name }}</td>
      <td>{{ $li->form }}</td>
      <td>{{ $li->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection