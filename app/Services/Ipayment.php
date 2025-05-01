<?php

namespace App\Services;

interface Ipayment
{
    public function processPayment( $data);

    public function MakePayment($transactionId);
    public function getService($id);


}