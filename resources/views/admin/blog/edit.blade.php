@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">

@section('content')
<main>
    <div class="edit-container forms">
        <h1>Edit The Post</h1>
        <form action="{{route('admin.posts.update' , $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}" required>
            <input type="text" name="image" value="{{$post->image}}" required>
            <textarea name="body" id="body" rows="10">{{$post->body}}</textarea>
            <select name="category_id" id="category_id">
                <option disabled {{$post->category_id == null ? 'selected' : ''}}>Select the category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == old('category' , $post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
            <fieldset name="tags[]">
                @foreach($tags as $tag)
                    <input type="checkbox" value="{{$tag->id}}" name="tags[]" {{$post->tags->contains($tag->id) ? 'checked="checked"' : ''}})>
                    <span>{{$tag->name}}</span>
                @endforeach
            </fieldset>
            <input type="submit" value="Edit">
        </form>
    </div>
</main>
@endsection