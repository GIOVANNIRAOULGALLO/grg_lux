<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;

use App\Models\Address;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $products=Product::all();
    }
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

     public function admin()
     {
         $brands=Brand::all();
         $categories=Category::all();
         return view('product.admin',compact('categories','brands'));
     }

    public function create()
    {
        $brands=Brand::all();
        $categories=Category::all();
        return view('product.create',compact('categories','brands'))->with('message','Articolo inserito correttamente!');
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
            'brand_id'=>$req->brand_id,
            'color'=>$req->color,
            'quantity'=>$req->quantity
        ]);
        return redirect(route('product.admin.create'))->with('message','Articolo inserito correttamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $sex=$product->sex;
        return view('product.show',compact('product','sex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('product.edit',compact('product','categories'));
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
        return redirect(route('product.show',compact('product')));
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('homepage'));
    }
    public function viewCart(){
        $products=Product::where('buy',true)->get();
        return view('carrello',compact('products'));
    }
    public function ship(){ return view('ship');}
    public function insertAddress(Request $req){
        Address::create([
            'city'=>$req->city,
            'road'=>$req->road,
            'number'=>$req->number,
            'cap'=>$req->cap,
            'state'=>$req->state,
            'user_id'=>Auth::user()->id
        ]);
        return redirect(route('stripe'));
    }
    public function ordine(){
        $products=Product::where('buy',true)->get();
        $count=0;
        foreach($products as $product){ 
            $count+=$product->price;
        }
        return view('ordine',compact('count'));   
    }
    public function addToCart(Product $product,Request $request){
        if($product->buy == 1){
            $quantity = max(1, min($request->input('quantity'), $product->quantity));
            $cart = session()->get('cart', []);
            $cart[$product->id] = [
                'product_id' => $product->id,
                'quantity' => $quantity,
            ];
            session()->put('cart', $cart);
            return redirect(route('product.show',compact('product')))->with('message','Articolo aggiunto al carrello!');
        }
        else{
            $product->update(['buy'=> 1 ]);
            return redirect(route('product.show',compact('product')))->with('message','Articolo aggiunto al carrello!');
        }
    }
    public function removeToCart(Product $product){
        $product->update(['buy' => 0 ]);
        $name=Auth::user()->name ?? '';
        $surname=Auth::user()->surname ?? '';
        $product_name=$product->name;
        return redirect(route('viewCart',['userName'=>'name','userSurname'=>'surname']))->with('message','Articolo rimosso dal carrello');
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
        $total=$products->count();
        return view('product.viewby',compact('products','sex','total'));
    }
    public function viewBySexCategory($sex,$category){
        $category_id=Category::where('name' , $category)->value('id');
        $products=Product::where('sex',$sex)->where('category_id',$category_id)->get();
        $total=$products->count();
        return view('product.viewbysc',compact('products','sex','category','total'));
    }
    public function orderAscendent(Product $products,$sex,$category){
       
        $products=$products->orderBy('price','ASC')->get();
        $total=$products->count();
        // $category=$products->first()->take('category_id')->category()->get();
        return view('product.viewbysc',compact('products','sex','category','total'));
    }

    public function orderDescendent(Product $products,$sex,$category){
        $products=$products->orderBy('price','DESC')->get();
        $total=$products->count();
        // $category=$products->first()->take('category_id')->category()->get();
        return view('product.viewbysc',compact('products','sex','category','total'));
    }

    public function orderNews(Product $products,$sex,$category){
        $products=$products->orderBy('created_at','DESC')->get();
        $total=$products->count();
        // $category=$products->first()->take('category_id')->category()->get();
        return view('product.viewbysc',compact('products','sex','category','total'));
    }
    
}
