<?php

namespace App\Strategy\Orders\DTOs;

use App\Strategy\Orders\Enums\ProductType;
use App\Strategy\Orders\Traits\MakeMany;

class Product
{

    use MakeMany;

    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly int $price,
        public readonly ProductType $type,
    ) {}
}