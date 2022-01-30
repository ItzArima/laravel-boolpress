@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/categories.css')}}">

@section('content')
<main>
    <div class="create-container forms">
        <h1>Create a new Category</h1>
        <form action="{{route('admin.categories.store')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Category Name" required>
            <input type="submit" value="Create">
        </form>
    </div>
</main>
@endsection