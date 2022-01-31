@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">

@section('content')
<main>
    <div class="posts-container">
        @foreach($posts as $post)
            <a href="{{route('posts.show' , $post->id)}}">
                <div class="post">
                    <div class="left">
                        <img src="{{asset('storage/' . $post->image)}}" alt="">
                    </div>
                    <div class="right">
                        <div class="title">
                            <h2>{{$post->title}}</h2>
                        </div>
                        <div class="body">
                            <p>{{$post->body}}</p>
                        </div>
                        <div class="date">
                            <p>{{date('F d Y' , strtotime($post->created_at))}}</p>
                            <p>{{date('h:m' , strtotime($post->created_at))}}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</main>
@endsection