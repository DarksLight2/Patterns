<?php

namespace App\Strategy\Orders\Algorithms;

use App\Strategy\Orders\DTOs\Product;

class Material implements Algorithm
{

    public function create(Product $product)
    {
        echo "Добавлен новый заказ в базу данных\n";
    }
}