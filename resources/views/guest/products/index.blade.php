@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/products.css')}}">

@section('content')
    <main>
        <div class="products-container">
            @foreach($products as $product)
                <a href="{{route('products.show' , $product->id)}}">
                    <div class="product">
                        <img src="{{$product->image}}" alt="">
                        <div class="product-info">
                            <h4>{{$product->name}}</h4>
                            <p>{{$product->price}} EUR</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection