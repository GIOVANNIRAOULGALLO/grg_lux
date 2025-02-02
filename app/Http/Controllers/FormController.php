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
    public function thankYou(){
        return view('thankYou');
    }
}
