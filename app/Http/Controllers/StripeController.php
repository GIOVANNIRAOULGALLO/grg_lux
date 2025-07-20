<?php
    
namespace App\Http\Controllers;
    
use Stripe;
use Stripe\Charge;
use App\Models\User;
use App\Models\Order;
use App\Models\Address;
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
        $addresses = Address::where('user_id', Auth::id())->get();
        $products = Product::where('buy', true)->get();
        $count = $products->sum('price');
        $stripeKey = config('services.stripe.key');
        
        return view('stripe', compact('count', 'addresses', 'stripeKey'));
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
        $email=Auth::user()->email;
        $user=Auth::user()->name;
        $message="Grazie per aver acquistato";
        $address=Auth::user()->addresses()->latest()->first();
        $contact=compact('email','user','message','address');
        Mail::to($email)->send(new ContactMail($contact, $address));
        
        foreach($products as $product){ 

          
            if($product->quantity != 0){ 
                $quantity = $product->pivot->quantity ?? 1; // se usi pivot o altro campo
                $subtotal = $product->price * $quantity;
                $count += $subtotal;

                // Scala il magazzino
                $product->quantity -= $quantity;
                $product->buy = false;
                $product->save();

            // Aggiungi l’ordine nel DB (se non lo fai già)
            $order=Order::create([
                'user_id' => Auth::id(),
                'address_id' => $address->id ?? null,
                'totale' => $count, 
                'stato' => 'pagato',
            ]);
                $qty = $quantities[$product->id] ?? 1;
                $product->decrement('quantity', $qty);
                $order->products()->attach($product->id, ['quantity' => $qty]);
            }
            $count+=$product->price;
        }
       
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $count*100,
                "currency" => "EUR",
                "source" => $request->stripeToken,
                "description" => "This payment is for a test"
        ]);
        // mando mail
        

       
        return redirect(route('thankYou'));
    }
}