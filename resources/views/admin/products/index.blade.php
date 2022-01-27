@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/products.css')}}">

@section('content')
    <main>
        <div class="admin-dashboard">
            <div class="row">
                <div class="id">
                    <h1>ID</h1>
                </div>
                <div class="col">
                    <h1>Name</h1>
                </div>
                <div class="col">
                    <h1>Price</h1>
                </div>
                <div class="col">
                    <h1>Qty</h1>
                </div>
                <div class="col">
                    <h1>Actions</h1>
                </div>
            </div>
            @foreach($products as $product)
                <div class="row">
                    <div class="id">
                        <p>{{$product->id}}</p>
                    </div>
                    <div class="col">
                        <p>{{$product->name}}</p>
                    </div>
                    <div class="col">
                        <p>{{$product->price}}</p>
                    </div>
                    <div class="col">
                        <p>{{$product->qty}}</p>
                    </div>
                    <div class="col">
                        <a href="{{route('admin.products.show' , $product->id)}}">View</a>
                        <a href="{{route('admin.products.edit' , $product->id)}}">Edit</a>
                        <form action="{{route('admin.products.destroy' , $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection