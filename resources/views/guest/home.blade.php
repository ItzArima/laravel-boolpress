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
            <div class="jumbo-text">
                <div class="icons">
                    <div class="server">
                        <a href="#">
                            <i class="fas fa-server fa-5x"></i>
                            <h1>Our Servers</h1>
                        </a>
                    </div>
                    <div class="prices">
                        <a href="#">
                            <i class="fas fa-dollar-sign fa-5x"></i>
                            <h1>Our Prices</h1>
                        </a>
                    </div>
                </div>
                <div class="slogans">
                    <h1>UNPARALLELED EXPERIENCES</h1>
                    <h1>UNIQUE PRICES</h1>
                    <h1><em>EXEMPLARY SERVICES</em></h1>
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="site-description">
                <h1>Developer platform all-in-one</h1>
                <div class="description-row">
                    <div class="left">
                        <img src="https://orangematter.solarwinds.com/wp-content/uploads/2018/06/iStock-823686906.jpg" alt="">
                    </div>
                    <div class="right">
                        <div class="line"></div>
                        <h2>We garant <em>the best performance</em> at <em>lowest price</em></h2>
                        <p>Our servers use the newest network technologies, allowing us to garant our users best performance, security and access to their personal servers</p>
                        <p>Create your own WebPage using all your imagination and become the best of all.</p>
                        <p>We garant our customers 24/7 support for any kind of question</p>
                    </div>
                </div>
            </div>
            <div class="plans-container">
                @foreach(config('plans') as $key => $item)
                    <a href="#">
                        <div class="plan">
                            @if($key == 1)
                                <div class="best">
                                    <h4>Best Choice</h4>
                                </div>
                            @endif
                            <img src="{{$item['img']}}" alt="">
                            <h1>{{$item['name']}}</h1>
                            <div class="row">
                                <p>Personal Domain</p>
                                <p style="color: {{$item['domain_check'] == 3 ? 'green' : 'red'}};">&#1000{{$item['domain_check']}};</p>
                            </div>
                            <div class="row">
                                <p>Storage: {{$item['storage']}}</p>
                                <p>&#10003;</p>
                            </div>
                            <div class="row">
                                <p>Support 24/7</p>
                                <p style="color: {{$item['support_check'] == 3 ? 'green' : 'red'}};">&#1000{{$item['support_check']}};</p>
                            </div>
                            <div class="row">
                                <p>RAM: {{$item['ram']}}</p>
                                <p>&#10003;</p>
                            </div>
                            <div class="price">
                                <p>$</p>
                                <h1>{{$item['price']}}</h1>
                                <p>/month</p>
                            </div> 
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
@endsection