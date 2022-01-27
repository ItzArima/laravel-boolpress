@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/products.css')}}">

@section('content')
<main>
    <div class="edit-container forms">
        <div class="title">
            <h1>Edit the product</h1>
        </div>
        <form action="{{route('admin.products.update' , $product->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{$product->name}}" required>
            <input type="text" name="image" value="{{$product->image}}" required>
            <textarea name="description" rows="10" required>{{$product->description}}</textarea>
            <input type="number" step="0.01" name="price" value="{{$product->price}}" required>
            <input type="number" name="qty" value="{{$product->qty}}">
            <input type="submit" value="Edit Product">
        </form>
    </div>
</main>
@endsection