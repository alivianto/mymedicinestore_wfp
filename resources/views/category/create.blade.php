@extends('layouts.conquer')
@section('content')
<h3>Category Form</h3>
<form method="POST" action="{{ route('kategori_obat.store') }}">
    @csrf
    <div class="form-group">
        <label for="InputCategoryName">Name</label>
        <input type="text" class="form-control" id="InputCategoryName" name="name" placeholder="Enter Category Name">
    </div>
    <div class="form-group">
        <label for="InputDescription">Description</label>
        <textarea class="form-control" id="InputDescription" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
