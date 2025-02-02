<?php
    
namespace App\Http\Controllers;
    
use Stripe;
use Stripe\Charge;
use App\Models\User;
use App\Models\Adress;
use App\Models\Product;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

        $email=Auth::user()->email;
        $user=Auth::user()->name;
        $message="Grazie per aver acquistato";
        $address=Auth::user()->adresses()->latest()->first();
        $contact=compact('email','user','message','address');
        Mail::to($email)->send(new ContactMail($contact,$address));
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
        // mando mail
        

       
        return redirect(route('ordine'));
    }
}