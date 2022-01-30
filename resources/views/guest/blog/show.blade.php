@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">

@section('content')
<main>
    <div class="post-show-container">
        <div class="image">
            <img src="{{$post->image}}" alt="">
            <div class="title">
                <h1>{{$post->title}}</h1>
            </div>
        </div>
        <div class="content">
            <div class="tags">
                @foreach($post->tags as $tag)
                    <div class="tag">
                        <h4>{{$tag->name}}</h4>
                    </div>
                @endforeach
            </div>
            <div class="category">
                <h4>Category: <a href="{{$post->category ? route('categories.show' , $post->category->id) : '#'}}" style="{{$post->category ? '' : 'pointer-events: none; color: black;'}}">{{$post->category ? $post->category->name : 'Uncategorized'}}</a></h4>
            </div>
            <div class="post-body">
                <p>{{$post->body}}</p>
            </div>
            <div class="bottom">
                <p>{{date('F d Y' , strtotime($post->created_at))}}</p>
            </div>
        </div>
    </div>
</main>
@endsection