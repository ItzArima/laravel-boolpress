<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home(){
        return view('guest.home');
    }

    public function contacts(){
        return view('guest.contacts');
    }

    public function sendMail(Request $request){
        
        $validate = $request->validate([
            'name' => 'required|min:4|max:50',
            'body' => 'required|min:10|max:1000',
            'email' => 'required|email'
        ]);


        /* return (new ContactMail($validate))->render(); */
        Mail::to('admin@example.com')->send(new ContactMail($validate));
        return redirect()->route('home')->with(session()->flash('success' , 'email sended'));
    }
}
