<?php

namespace App\AbstractFactory\Payments;

use App\AbstractFactory\Payments\Interfaces\Factory;

class Payment
{
    public function pay(Factory $factory): void
    {
        $payment_service = $factory->createPayment();
        $payment_service->handle();
    }
}