<?php

/**
 * @var $payment Payment
 * @var $factories Factory[]
 */

use App\AbstractFactory\Payments\Factories\FreekassaFactory;
use App\AbstractFactory\Payments\Factories\LiqpayFactory;
use App\AbstractFactory\Payments\Factories\PayPalFactory;
use App\AbstractFactory\Payments\Interfaces\Factory;
use App\AbstractFactory\Payments\Payment;
use App\Container;

require '../vendor/autoload.php';

try {
    $payment = Container::handle(Payment::class);

    $factories = [
        Container::handle(PayPalFactory::class),
        Container::handle(LiqpayFactory::class),
        Container::handle(FreekassaFactory::class),
    ];

    foreach ($factories as $factory) {
        $payment->pay($factory);
    }

} catch (Exception $e) {
    echo $e->getMessage();
}