<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BillingController extends Controller
{
    // Metodos para el billing 
    // Test cus ID 

    /*
    {
  "id": "cus_JuJmIJecrbRZ95",
  "object": "customer",
  "address": null,
  "balance": 0,
  "created": 1627072743,
  "currency": null,
  "default_source": null,
  "delinquent": false,
  "description": null,
  "discount": null,
  "email": "omargponce@gmail.com",
  "invoice_prefix": "1A0FDDC8",
  "invoice_settings": {
    "custom_fields": null,
    "default_payment_method": null,
    "footer": null
  },
  "livemode": false,
  "metadata": [
    
  ],
  "name": "omar",
  "next_invoice_sequence": 1,
  "phone": null,
  "preferred_locales": [
    
  ],
  "shipping": null,
  "tax_exempt": "none"
} 
    */


    public function __invoke(Request $request)
    {
      # Verificamos el checkout state 
      $checkout = $request->user()
      ->newSubscription('qmenu', env('STRIPE_PRICEID'))
      ->checkout([
        'success_url' => route('dashboard'), 
        'cancel_url' => route('subscription')
      ]);

      // dd($checkout);

      return Inertia::render('Subs/manage',[
        'stripeKey' => env('STRIPE_KEY'),
        'checkoutSessionId' => $checkout->id
      ]);

    }

    public function createAsCus(Request $request)
    {
        # metodo para crear al usuario como usuario en stripe ...
        $user = $request->user();
        $stripeCustomer = $user->createAsStripeCustomer();
        return $stripeCustomer;

    }

    public function BillingPortal(Request $request)
    {
        # code...
        // $user = $request->user();
        // return $user->redirectToBillingPortal(); 
        // return $request->user()->redirectToBillingPortal();
        return $request->user()->redirectToBillingPortal(route('billing'));
    }
}
