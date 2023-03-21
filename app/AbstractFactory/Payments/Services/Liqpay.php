<?php

namespace App\AbstractFactory\Payments\Services;

use App\AbstractFactory\Payments\Interfaces\Payment;

class Liqpay implements Payment
{

    public function handle()
    {
        echo 'Payed with LiqPay<br>';
    }
}