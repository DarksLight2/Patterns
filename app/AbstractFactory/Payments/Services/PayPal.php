<?php

namespace App\AbstractFactory\Payments\Services;

use App\AbstractFactory\Payments\Interfaces\Payment;

class PayPal implements Payment
{

    public function handle()
    {
        echo 'Payed with PayPal<br>';
    }
}