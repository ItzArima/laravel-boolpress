@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/categories.css')}}">

@section('content')
<main>
    <div class="create-container forms">
        <h1>Create a new Tag</h1>
        <form action="{{route('admin.tags.store')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Tag Name" required>
            <input type="submit" value="Create">
        </form>
    </div>
</main>
@endsection