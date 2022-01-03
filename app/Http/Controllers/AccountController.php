<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function display(Auth $user){
        return view('auth.account',compact('user'));
    }
}
