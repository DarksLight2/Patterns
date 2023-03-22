<?php

namespace App\Strategy\Orders\Algorithms;

use App\Strategy\Orders\DTOs\Product;

interface Algorithm
{
    public function create(Product $product);
}