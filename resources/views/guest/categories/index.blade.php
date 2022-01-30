@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/categories.css')}}">

@section('content')
<main>
    <div class="categories-container">
        @foreach($categories as $category)
            <a href="{{route('categories.show' , $category->id)}}">
                <div class="category">
                    <h1>{{$category->name}}</h1>
                </div>
            </a>
        @endforeach
    </div>
</main>
@endsection