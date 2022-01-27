@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/auth.css')}}">

@section('content')
<main>
    @guest
        <div class="container">
            <h1>Please login or register</h1>
        </div>
    @else
        <div class="dashboard">
            <div class="sidebar">
                <div class="categories">
                <div class="category">
                        <div class="title">
                            <h1>Products</h1>
                            <i class="fas fa-chevron-down chev"></i>
                        </div>
                        <div class="actions">
                            <a href="{{route('admin.products.index')}}">Manage Products</a>
                            <a href="{{route('admin.products.create')}}">Add a Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="left">
                    <div class="avatar">
                        <h1 id="avatar"></h1>
                    </div>
                </div>
                <div class="right">
                    <div class="row">
                        <h1>Name</h1>
                        <h4>{{ Auth::user()->name }}</h4>
                    </div>
                    <div class="row">
                        <h1>E-mail</h1>
                        <h4>{{ Auth::user()->email }}</h4>
                    </div>
                    <div class="row">
                        <h1>Account Verified</h1>
                        <h4>{{ Auth::user()->email_verified_at == null ? 'No' : 'Yes' }}</h4>
                    </div>
                </div>
            </div>
        </div>
    @endguest
</main>
@endsection

<script>
    // set the avatar with the first letter of user name
    function setAvatar(){
        let name = '{{ Auth::user()->name }}'
        let firstLetter = name.charAt(0).toUpperCase();
        let avatar = document.getElementById('avatar')
        if(avatar == null){
            setTimeout(setAvatar , 100)
        }
        else{
            avatar.innerHTML += firstLetter;
        }
    }
    
    // show the actions of selected category
    function show(){
        let categories = document.getElementsByClassName('category')
        let actions = document.getElementsByClassName('actions')
        let chevron = document.getElementsByClassName('chev')
        if(categories.length == 0 || actions.length == 0 || chevron.length == 0 ){
            setTimeout(show , 100)
        }
        else{
            for(let i=0; i<categories.length; i++){
                categories[i].addEventListener('click' , () =>{
                    if(actions[i].classList.contains('active')){
                        actions[i].classList.remove('active')
                        chevron[i].classList.remove('rotate')
                    }
                    else{
                        actions[i].classList.add('active')
                        chevron[i].classList.add('rotate')
                    }
                })
            }
        }
    }
    show();
    setAvatar();
</script>
