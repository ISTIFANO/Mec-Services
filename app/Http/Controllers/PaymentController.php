<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Services\Ipayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected Ipayment $payement_service;
 
    public function __construct(Ipayment $payement_service )
    {
        $this->payement_service = $payement_service;
     

    }
    /**
     * Display a listing of the resource.
     */
    public function show(Request $request)
    {
        $service = $this->payement_service->getService($request->service_id);
        return view('Client.Payement.payment',compact('service'));

    }

  
    /**
     * Store a newly created resource in storage.
     */
    public function makePayement(Request $request)
    {
        dd($request->all());
    }

  

  
}
