<?php
    
namespace App\Http\Controllers;
    
use Stripe;
use Session;
use Stripe\Charge;
use App\Models\Adress;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
    
class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $adresses=Adress::where('user_id',Auth::user()->id)->get();
        $products=Product::where('buy',true)->get();
        $count=0;
        foreach($products as $product){ 
            $count+=$product->price;
        }
        
        return view('stripe',compact('count','adresses'));
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $products=Product::where('buy',true)->get();
        $count=0;
        foreach($products as $product){ 
            $count+=$product->price;
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $count,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);
   
        Session::flash('success', 'Payment successful!');
           
        return redirect(route('ordine'));
    }
}