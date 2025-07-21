<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Auth::user()->orders()->with('address')->with('products')->latest()->get();
        return view('orders.index', compact('orders'));
    }
}
