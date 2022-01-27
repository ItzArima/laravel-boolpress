@extends('layouts.app')

@section('CSS')

@section('content')
    <main>
        <div class="products-container">
            @foreach($products as $product)
                <h1>{{$product->name}}</h1>
                <img src="{{$product->image}}" alt="">
                <p>{{$product->price}} EUR</p>
            @endforeach
        </div>
    </main>
@endsection