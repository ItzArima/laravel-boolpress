@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/products.css')}}">

@section('content')
    <main>
        <div class="show-container">
            <div class="left">
                <img src="{{$product->image}}" alt="">
            </div>
            <div class="right">
                <div class="top">
                    <h1>{{$product->name}}</h1>
                    <p>{{$product->description}}</p>
                </div>
                <div class="bottom">
                    <div class="price">
                        <h4>{{$product->price}}</h4>
                        <p>EUR</p>
                    </div>
                    <div class="aviability">
                        <h4>{{$product->qty > 0 ? 'Aviable' : 'Out of stock'}}</h4>
                        @if($product->qty < 10)
                            <p>Last remaining</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection