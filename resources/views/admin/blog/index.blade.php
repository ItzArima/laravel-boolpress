@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">

@section('content')
<main>
    <div class="admin-dashboard">
        <div class="row">
            <div class="id">
                <h1>ID</h1>
            </div>
            <div class="col">
                <h1>Title</h1>
            </div>
            <div class="col">
                <h1>Image</h1>
            </div>
            <div class="col">
                <h1>Created at</h1>
            </div>
            <div class="col">
                <h1>Actions</h1>
            </div>
        </div>
        @foreach($posts as $post)
            <div class="row">
                <div class="id">
                    <p>{{$post->id}}</p>
                </div>
                <div class="col">
                    <p>{{$post->title}}</p>
                </div>
                <div class="col">
                    <p>{{$post->image}}</p>
                </div>
                <div class="col">
                    <p>{{date('F d Y' , strtotime($post->created_at))}}</p>
                </div>
                <div class="col">
                    <a href="{{route('admin.posts.show' , $post->id)}}">View</a>
                    <a href="{{route('admin.posts.edit' , $post->id)}}">Edit</a>
                    <form action="{{route('admin.posts.destroy' , $post->id)}}" method="POST">
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