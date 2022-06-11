@extends('layouts.frontend')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">
            @foreach($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('images/'.$product->image) }}" alt="" style="width:100%;" height="200">
                    <div class="caption">
                        <h4>{{ $product->generic_name }}</h4>
                        <p>{{ Str::limit(strtolower($product->description), 50) }}</p>
                        <p><strong>Price: </strong>{{ $product->price }}</p>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" 
                            class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!-- End row -->

    </div>

@endsection