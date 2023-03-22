<?php

namespace App\Strategy\Orders\Enums;

enum ProductType: string
{
    case PG = 'promo';
    case IG = 'intangible';
    case QG = 'quest';
    case MG = 'material';
}
