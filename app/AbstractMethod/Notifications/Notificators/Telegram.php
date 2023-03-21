<?php

namespace App\AbstractMethod\Notifications\Notificators;

use App\AbstractMethod\Notifications\Interfaces\Sender;
use App\AbstractMethod\Notifications\Notification;
use App\AbstractMethod\Notifications\Senders\TelegramSender;
use App\Container;
use Exception;

class Telegram extends Notification
{

    /**
     * @throws Exception
     */
    protected function sender(): Sender
    {
        return Container::singleton(TelegramSender::class);
    }
}