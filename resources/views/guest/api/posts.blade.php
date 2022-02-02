@extends('layouts.app')

@section('CSS')

@section('content')
    <main>
        <div id="we" style="padding-top: calc(52px + 1.5rem);">
            <div class="post" v-for="post in posts">
                <h4>@{{post.title}}</h4>
                <p>@{{post.body}}</p>
            </div>
        </div>
    </main>

    
@endsection