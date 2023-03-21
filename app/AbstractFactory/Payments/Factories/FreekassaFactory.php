<?php

namespace App\AbstractFactory\Payments\Factories;

use App\AbstractFactory\Payments\Interfaces\Factory;
use App\AbstractFactory\Payments\Interfaces\Payment;
use App\AbstractFactory\Payments\Services\Freekassa;
use App\Container;
use Exception;

class FreekassaFactory implements Factory
{

    /**
     * @throws Exception
     */
    public function createPayment(): Payment
    {
        return Container::singleton(Freekassa::class);
    }
}