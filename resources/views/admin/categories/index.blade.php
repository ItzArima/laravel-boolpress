@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/categories.css')}}">

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
                <h1>Slug</h1>
            </div>
            <div class="col">
                <h1>Created at</h1>
            </div>
            <div class="col">
                <h1>Actions</h1>
            </div>
        </div>
        @foreach($categories as $category)
            <div class="row">
                <div class="id">
                    <p>{{$category->id}}</p>
                </div>
                <div class="col">
                    <p>{{$category->name}}</p>
                </div>
                <div class="col">
                    <p>{{$category->slug}}</p>
                </div>
                <div class="col">
                    <p>{{date('F d Y' , strtotime($category->created_at))}}</p>
                </div>
                <div class="col">
                    <a href="{{route('admin.categories.show' , $category->id)}}">View</a>
                    <a href="{{route('admin.categories.edit' , $category->id)}}">Edit</a>
                    <form action="{{route('admin.categories.destroy' , $category->id)}}" method="POST">
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