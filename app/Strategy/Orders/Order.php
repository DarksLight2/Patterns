<?php

namespace App\Strategy\Orders;

use App\AbstractMethod\Notifications\Notificators\Email;
use App\Container;
use App\Strategy\Orders\Algorithms\Algorithm;
use App\Strategy\Orders\DTOs\Contact;
use App\Strategy\Orders\DTOs\Product;
use App\Strategy\Orders\Enums\OrderAlgorithm;
use Exception;

class Order
{

    public function __construct(
        public readonly Product $product,
        public readonly Contact $contact,
    ) {}

    /**
     * @throws Exception
     */
    public function create(): void
    {
        $this->getAlgorithm()->create($this->product);
        $this->notify();
    }

    /**
     * @throws Exception
     */
    public function notify(): void
    {
        $notificator = Container::handle(Email::class);
        $notificator->send([$this->contact->email], 'Your order is created.');
    }

    /**
     * @throws Exception
     */
    protected function getAlgorithm(): Algorithm
    {

        foreach (OrderAlgorithm::cases() as $algorithm) {
            if($algorithm->name === $this->product->type->name) return new $algorithm->value();
        }

        throw new Exception('Не найдено алгоритм для данного типа продукта');
    }
}