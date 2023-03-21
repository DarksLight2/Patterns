<?php

namespace App\AbstractFactory\Payments\Services;

use App\AbstractFactory\Payments\Interfaces\Payment;

class Freekassa implements Payment
{
    public function handle()
    {
        echo 'Payed with Freekassa<br>';
    }
}