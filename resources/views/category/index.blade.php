@extends('layouts.conquer')
@section('content')
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h2>List Category</h2> 
        <table class="table table-hover">
          <thead>
            <tr>
              <th>name</th>
              <th>description</th>
            </tr>
          </thead>
          <tbody>
            @foreach($listDataC as $li)
            <tr>
              <td>{{ $li->name }}</td>
              <td>{{ $li->description }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ url('categoryform/create') }}" class="btn btn-info" type="button">+ Category Baru</a>
    <?php
        $id = (isset($_GET['id'])) ? $_GET['id'] : $listDataC[0]->id;
    ?>
    {{-- <div class="dropdown">
        <button class="btn dropdown-toggle border mt-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @foreach($listDataC as $category)
                @if($category->id == $id)
                    {{ $category->name }}
                @endif
            @endforeach
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($listDataC as $category)
            <a class="dropdown-item" href="?id={{ $category->id }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
        @foreach($listDataM as $data)
            @if($data->category_id == $id)
                <div class="col-md-4 mt-4">
                    <div class="card"> --}}
                        {{-- <img class="card-img-top" src="{{ asset('images/'.$data->image) }}" alt=""> --}}
                        {{-- <div class="card-body">
                            <h6 class="card-title">{{ $data->generic_name }} {{ $data->form  }}</h6>
                            <p>Rp. {{ $data->price }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div> --}}
@endsection
