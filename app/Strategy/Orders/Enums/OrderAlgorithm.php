<?php

namespace App\Strategy\Orders\Enums;

use App\Strategy\Orders\Algorithms\Intangible;
use App\Strategy\Orders\Algorithms\Material;
use App\Strategy\Orders\Algorithms\Promo;
use App\Strategy\Orders\Algorithms\Quest;

enum OrderAlgorithm: string
{
    case PG = Promo::class;
    case IG = Intangible::class;
    case QG = Quest::class;
    case MG = Material::class;
}
