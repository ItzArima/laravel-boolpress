@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')
    <main>
        <div class="jumbo-container">
            <div class="video">
                <video autoplay loop muted id="banner">
                    <source src="{{asset('video/banner.mp4')}}" type="video/mp4" preload="none"> 
                </video>
            </div>
            <div class="dissolve"></div>
        </div>
    </main>
@endsection