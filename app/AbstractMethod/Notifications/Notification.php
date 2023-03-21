<?php

namespace App\AbstractMethod\Notifications;

use App\AbstractMethod\Notifications\Interfaces\Sender;

abstract class Notification
{
    abstract protected function sender(): Sender;

    protected function beforeSend(): void
    {
        $this->sender()->prepareRequest();
        $this->sender()->connect();
    }

    protected function manyRecipients(array $recipients): bool
    {
        return count($recipients) > 1;
    }

    public function send(array $recipients, string $message): bool
    {

        $this->beforeSend();

        if($this->manyRecipients($recipients)) return $this->sender()->toMany($recipients, $message);

        return $this->sender()->toOne($recipients[0], $message);
    }
}