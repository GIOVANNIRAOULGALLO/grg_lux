<?php
    
namespace App\Http\Controllers;
    
use Stripe;
use Stripe\Charge;
use App\Models\User;
use App\Models\Adress;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
    
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
        $productbuyed=0;
        $products=Product::where('buy',true)->get();
        $count=0;
        foreach($products as $product){ 
            $count+=$product->price;
            $product->update(['buy'=>  0]);
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $count,
                "currency" => "EUR",
                "source" => $request->stripeToken,
                "description" => "This payment is for a test"
        ]);      
        return redirect(route('ordine'));
    }
}