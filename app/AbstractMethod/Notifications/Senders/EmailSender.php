<?php

namespace App\AbstractMethod\Notifications\Senders;

use App\AbstractMethod\Notifications\Interfaces\Sender;

class EmailSender implements Sender
{

    public function prepareRequest(): void
    {
        // TODO: Implement prepareRequest() method.
    }

    public function toOne(string $recipient, string $message): bool
    {
        echo 'Sent to one recipient through email!<br>';
        return true;
    }

    public function toMany(array $recipients, string $message): bool
    {
        echo 'Sent to many recipients through email!<br>';
        return true;
    }

    public function connect(): void
    {
        // TODO: Implement connect() method.
    }
}