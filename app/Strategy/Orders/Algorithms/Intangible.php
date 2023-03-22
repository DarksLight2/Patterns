<?php

namespace App\Strategy\Orders\Algorithms;

use App\Strategy\Orders\DTOs\Product;

class Intangible implements Algorithm
{

    public function create(Product $product)
    {
        echo "Что то там создалось из не материальным подарком\n";
    }
}