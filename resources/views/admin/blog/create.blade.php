@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">

@section('content')
<main>
    <div class="create-container forms">
        <h1>Create a new Post</h1>
        <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Post Title" required>
            <input type="file" name="image" placeholder="Post Image Link" accept="images/*" required>
            <textarea name="body" id="body" rows="10" placeholder="Post Body"></textarea>
            <select name="category_id" id="category_id">
                <option disabled selected>Select the category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <fieldset name="tags[]">
                @foreach($tags as $tag)
                    <input type="checkbox" value="{{$tag->id}}" name="tags[]">
                    <span>{{$tag->name}}</span>
                @endforeach
            </fieldset>
            <input type="submit" value="Create">
        </form>
    </div>
</main>
@endsection