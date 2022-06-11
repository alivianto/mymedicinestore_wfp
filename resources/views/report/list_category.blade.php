{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>List Medicines Inner Join</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> --}}
@extends('layouts.conquer')
@section('content')
<div class="container mt-5">
     
  {{-- List Medicines (Table) --}}   
  <h2>List Category</h2> 
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

  
</div>
@endsection
{{-- </body>
</html> --}}
