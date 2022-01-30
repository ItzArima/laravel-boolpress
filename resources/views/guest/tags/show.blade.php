@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/categories.css')}}">

@section('content')
<main>
    <div class="category-container">
        <h1>{{$tag->name}}</h1>
        <div class="posts">
            <h1>Related Posts</h1>
            <div class="related-posts-container">
                @if(count($posts) != 0)
                    @foreach($posts as $post)
                        <a href="{{route('posts.show' , $post->id)}}">
                            <div class="post">
                                <h1>{{$post->title}}</h1>
                                <div class="image">
                                    <img src="{{$post->image}}" alt="">
                                </div>
                                <div class="date">
                                    <p>{{date('F d Y' , strtotime($post->created_at))}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <h3>There are no posts related to this tag</h3>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection