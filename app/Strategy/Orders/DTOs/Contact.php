<?php

namespace App\Strategy\Orders\DTOs;

class Contact
{
    public function __construct(
        public readonly string $email = '',
        public readonly string $telegram = '',
        public readonly string $whatsapp = '',
    )
    {}
}