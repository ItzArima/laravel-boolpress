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
                <h1>Created at</h1>
            </div>
            <div class="col">
                <h1>Last Updated at</h1>
            </div>
            <div class="col">
                <h1>Actions</h1>
            </div>
        </div>
        @foreach($tags as $tag)
            <div class="row">
                <div class="id">
                    <p>{{$tag->id}}</p>
                </div>
                <div class="col">
                    <p>{{$tag->name}}</p>
                </div>
                <div class="col">
                    <p>{{date('F d Y' , strtotime($tag->created_at))}}</p>
                </div>
                <div class="col">
                    <p>{{date('F d Y' , strtotime($tag->updated_at))}}</p>
                </div>
                <div class="col">
                    <a href="{{route('admin.tags.show' , $tag->id)}}">View</a>
                    <a href="{{route('admin.tags.edit' , $tag->id)}}">Edit</a>
                    <form action="{{route('admin.tags.destroy' , $tag->id)}}" method="POST">
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