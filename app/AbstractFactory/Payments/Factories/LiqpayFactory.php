<?php

namespace App\AbstractFactory\Payments\Factories;

use App\AbstractFactory\Payments\Interfaces\Factory;
use App\AbstractFactory\Payments\Interfaces\Payment;
use App\AbstractFactory\Payments\Services\Liqpay;
use App\Container;
use Exception;

class LiqpayFactory implements Factory
{

    /**
     * @throws Exception
     */
    public function createPayment(): Payment
    {
        return Container::singleton(Liqpay::class);
    }
}