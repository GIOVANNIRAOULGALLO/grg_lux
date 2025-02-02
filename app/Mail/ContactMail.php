<?php

namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;
    public $products;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contatto)
    {
        $this->products=Product::where('buy',true)->get();
        $this->contact=$contatto;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('miamail@lol.it')
	    ->view('contactMail');
    }
}
