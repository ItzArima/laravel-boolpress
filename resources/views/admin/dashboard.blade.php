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
        <div class="container dashboard">
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
    @endguest
</main>
@endsection

<script>
    // set the avatar with the first letter of user name
    function setAvatar(){
        let name = '{{ Auth::user()->name }}'
        let firstLetter = name.charAt(0)
        setTimeout( () => {
            let avatar = document.getElementById('avatar')
            if(firstLetter == null || avatar == null){
                console.log('retrying')
                setAvatar();
            }
            else{
                avatar.innerHTML += firstLetter;
            }
        }, 1);
    }

    setAvatar();
</script>
