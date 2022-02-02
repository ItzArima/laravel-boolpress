@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/contacts.css')}}">

@section('content')
    <main>
        <div class="contacts-container">
            <div class="title">
                <h1>Contact Us</h1>
            </div>
            <div class="form-container">
                <form action="{{route('contacts.send')}}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="body" id="body" rows="5" placeholder="Your Message" required></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </main>
@endsection