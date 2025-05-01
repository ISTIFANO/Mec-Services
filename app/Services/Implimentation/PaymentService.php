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

    public function processPayment($data)
    {
        try{
        $service = $this->getService($data["service_id"]);
            Stripe::setApiKey(env('STRIPE_SECRET'));
                        
            $outlet1Amount = $data["amount"] * 0.7; 
            $outlet2Amount = $data["amount"]  * 0.3;  
        
       Charge::create([
                'amount' => $service->offre->budjet,
                'currency' => 'usd',
                'source' => $data['stripeToken'],
                'description' => 'Payment  pour le service . ' . $service->titre . " avec le client" . $service->user->firstname . $service->user->lastname,
                'transfer_data' => [
                    'destination' => env('AAMIRSTRIPE'),  
                    'amount' => $outlet1Amount, 
                ],
            ]);
        
            Transfer::create([
                'amount' => $outlet2Amount,  
                'currency' => 'usd',
                'destination' => env('AAMIRSTRIPE'),  
                'description' => 'Transfer '.$service->user->firstname . 'to' .$service->mechanicien->user->firstname ,
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