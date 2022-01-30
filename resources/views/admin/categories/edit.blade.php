@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/categories.css')}}">

@section('content')
<main>
    <div class="edit-container forms">
        <h1>Edit The Category</h1>
        <form action="{{route('admin.categories.update' , $category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{$category->name}}" required>
            <input type="submit" value="Edit">
        </form>
    </div>
</main>
@endsection