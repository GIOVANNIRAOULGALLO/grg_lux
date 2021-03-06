<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::take(4)->orderBy('id','DESC')->get();
        return view('welcome',compact('products'));
    }
    public function search(Request $req){
        $q=$req->q;
        $products=Product::search($q)->get();
        return view('product.results',compact('products','q'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        $categories=Category::all();
        return view('product.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        Product::create([
            'name'=>$req->name,
            'description'=>$req->description,
            'price'=>$req->price,
            'sex'=>$req->sex,
            'category_id'=>$req->category_id,
            'brand_id'=>$req->brand_id
        ]);
        return redirect(route('homepage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Product $product)
    {
        $product->update($req->all());
        return redirect(route('homepage'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('homepage'));
    }

    public function viewCart(){
        $products=Product::where('buy',true)->get();
        return view('carrello',compact('products'));
    }

    public function addToCart(Product $product){
        if($product->buy == 1){
            return redirect(route('product.show',compact('product')))->with('message','Questo articolo ?? gia nel carrello!');
        }
        else{
            $product->update(['buy'=> 1 ]);
            return redirect(route('product.show',compact('product')));
        }
       
    }
    
    public function removeToCart(Product $product){
        $product->update(['buy'=> 0 ]);
        return redirect(route('cart'));
    }

    public function addLoved(Product $product){
        if(Auth::user()){
            $user=Auth::user()->id;
            $product->users()->attach($user); 
        }
       
        return redirect(route('product.show',compact('product')));
    }

    public function viewBySex($sex){
        $products=Product::where('sex',$sex)->get();
        return view('product.viewby',compact('products','sex'));
    }

}
