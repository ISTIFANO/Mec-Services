<?php

namespace App\Services;

interface Ipayment
{
    public function processPayment( $amount,$data);

    public function MakePayment($transactionId);

}