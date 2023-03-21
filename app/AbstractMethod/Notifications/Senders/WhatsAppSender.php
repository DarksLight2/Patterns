<?php

namespace App\AbstractMethod\Notifications\Senders;

use App\AbstractMethod\Notifications\Interfaces\Sender;

class WhatsAppSender implements Sender
{
    public function prepareRequest(): void
    {
        // TODO: Implement prepareRequest() method.
    }

    public function toOne(string $recipient, string $message): bool
    {
        echo 'Sent to one recipient through WatsApp!<br>';
        return true;
    }

    public function toMany(array $recipients, string $message): bool
    {
        echo 'Sent to many recipients through WatsApp!<br>';
        return true;
    }

    public function connect(): void
    {
        // TODO: Implement connect() method.
    }
}