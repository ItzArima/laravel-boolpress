@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/categories.css')}}">

@section('content')
<main>
    <div class="edit-container forms">
        <h1>Edit The Tag</h1>
        <form action="{{route('admin.tags.update' , $tag->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{$tag->name}}" required>
            <input type="submit" value="Edit">
        </form>
    </div>
</main>
@endsection