<?php

namespace App\Strategy\Orders\Algorithms;

use App\Strategy\Orders\DTOs\Product;

class Quest implements Algorithm
{

    public function create(Product $product)
    {
        echo "Заказали квест что-ли)\n";
    }
}