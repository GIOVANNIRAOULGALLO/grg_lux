<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AccountController;

class FormController extends Controller
{
    public $req;
    public $messagge_thank="Grazie per aver comprato da noi";

    public function form(){
        return view('form');
    }
    public function store (Auth $user){
        // dd($req->all());
        $email=Auth::user()->email;
        $user=Auth::user()->name;
        $message="Grazie per aver acquistato";
        $contact=compact('email','user','message');
        Mail::to($email)->send(new ContactMail($contact));
        return redirect(route('thankYou'));
    }
    public function thankYou(){
        return view('thankYou');
    }
}
