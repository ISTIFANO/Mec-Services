<?php

namespace App\Services\Implimentation;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Transfer;
use App\Services\Ipayment;
use App\Services\IService;
use Stripe\Exception\CardException;

class PaymentService implements Ipayment
{
    protected IService $service;
 
    public function __construct(IService $service )
    {
        $this->service = $service;
     

    }

    public function processPayment($amount , $data)
    {
        try{
        
            Stripe::setApiKey(env('STRIPE_SECRET'));
                        
            $outlet1Amount = $data["amount"] * 0.7; 
            $outlet2Amount = $data["amount"]  * 0.3;  
        
       Charge::create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $data['stripeToken'],
                'description' => 'Payment  pour le service . ' . $data["service"] . " avec le client" . $data["client"],
                'transfer_data' => [
                    'destination' => $data['acct_outlet_id'],  
                    'amount' => $outlet1Amount, 
                ],
            ]);
        
            Transfer::create([
                'amount' => $outlet2Amount,  
                'currency' => 'usd',
                'destination' => env('AAMIRSTRIPE'),  
                'description' => 'Transfer '.$data["client"] . 'to' .$data["mechnicien"] ,
            ]);
        
            return back()->with('success', 'Payment successful!');

        } catch (CardException $e){

            return "error " . $e;

        }
    

    }

    public function MakePayment($data){

    }
    public function getService($data){
        return $this->service->findService($data);


    }

}