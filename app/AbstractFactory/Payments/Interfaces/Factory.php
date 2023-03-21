<?php

namespace App\AbstractFactory\Payments\Interfaces;

interface Factory
{
    public function createPayment(): Payment;
}