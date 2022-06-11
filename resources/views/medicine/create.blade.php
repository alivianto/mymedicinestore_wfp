@extends('layouts.conquer')
@section('content')
<h3>Medicine Form</h3>
<form enctype="multipart/form-data" role="form" method="POST" action="{{ route('obat.store') }}">
    @csrf
    <div class="form-group">
        <label for="InputGenericName">Generic Name</label>
        <input type="text" class="form-control" id="InputGenericName" name="generic_name" placeholder="Enter Generic Name">
      </div>
    <div class="form-group">
      <label for="InputForm">Form</label>
      <input type="text" class="form-control" id="InputForm" name="form" placeholder="Enter Form">
    </div>
    <div class="form-group">
        <label for="InputRestricitonFormula">Restriction Formula</label>
        <input type="text" class="form-control" id="InputRestricitonFormula" name="restricition_formula" placeholder="Enter Restriction Formula">
    </div>
    <div class="form-group">
        <label for="InputPrice">Price</label>
        <input type="text" class="form-control" id="InputPrice" name="price" placeholder="Enter Price">
    </div>
    <div class="form-group">
        <label for="InputDescription">Description</label>
        <textarea class="form-control" id="InputDescription" name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="InputFaskesTK1">Faskes TK1</label>
        <select name="faskes1" class="form-control">
            <option value="0">Tidak</option>
            <option value="1">Ya</option>
        </select>
    </div>
    <div class="form-group">
        <label for="InputFaskesTK2">Faskes TK2</label>
        <select name="faskes2" class="form-control">
            <option value="0">Tidak</option>
            <option value="1">Ya</option>
        </select>
    </div>
    <div class="form-group">
        <label for="InputFaskesTK3">Faskes TK3</label>
        <select name="faskes3" class="form-control">
            <option value="0">Tidak</option>
            <option value="1">Ya</option>
        </select>
    </div>
    <div class="form-group">
        <label for="InputCategory">Category</label>
        <select name="category" class="form-control">
            <option>Select Category</option>
            @foreach($cdata as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
