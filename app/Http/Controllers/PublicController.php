<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function locale($locale){
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
