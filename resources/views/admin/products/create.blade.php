@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/products.css')}}">

@section('content')
    <main>
        <div class="create-container forms">
            <div class="title">
                <h1>Create a new product</h1>
            </div>
            <form action="{{route('admin.products.store')}}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Product Name" required>
                <input type="text" name="image" placeholder="Product ImageUrl" required>
                <textarea name="description" rows="10" placeholder="Product Description" required></textarea>
                <input type="number" step="0.01" name="price" placeholder="Product Price" required>
                <input type="number" name="qty" placeholder="Product Quantity">
                <select name="category_id" id="category_id">
                    <option selected disabled>Select a Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <input type="submit" value="Create Product">
            </form>
        </div>
    </main>
@endsection