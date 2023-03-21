<?php

namespace App\AbstractMethod\Notifications\Interfaces;

interface Sender
{
    public function prepareRequest(): void;
    public function toOne(string $recipient, string $message): bool;
    public function toMany(array $recipients, string $message): bool;
    public function connect(): void;
}