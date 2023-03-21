<?php

/**
 * @var $payment Payment
 * @var $factories Factory[]
 * @var $notificator Notification
 */

use App\AbstractFactory\Payments\Factories\FreekassaFactory;
use App\AbstractFactory\Payments\Factories\LiqpayFactory;
use App\AbstractFactory\Payments\Factories\PayPalFactory;
use App\AbstractFactory\Payments\Interfaces\Factory;
use App\AbstractFactory\Payments\Payment;
use App\AbstractMethod\Notifications\Notification;
use App\AbstractMethod\Notifications\Notificators\Email;
use App\AbstractMethod\Notifications\Notificators\Telegram;
use App\AbstractMethod\Notifications\Notificators\WhatsApp;
use App\Container;

require '../vendor/autoload.php';

try {
//    Abstract Factory (Payments)
//    $payment = Container::handle(Payment::class);
//
//    $factories = [
//        Container::handle(PayPalFactory::class),
//        Container::handle(LiqpayFactory::class),
//        Container::handle(FreekassaFactory::class),
//    ];
//
//    foreach ($factories as $factory) {
//        $payment->pay($factory);
//    }

    // Abstract Method (Notifications)
    $notificator = Container::handle(Email::class);
    $notificator->send(['example@mail.com', 'example2@mail.com'], 'Hello world!');
    $notificator->send(['example@mail.com'], 'Hello world!');

    $notificator = Container::handle(WhatsApp::class);
    $notificator->send(['+65562845'], 'Hello world!');

    $notificator = Container::handle(Telegram::class);
    $notificator->send(['+65562845'], 'Hello world!');

} catch (Exception $e) {
    echo $e->getMessage();
}