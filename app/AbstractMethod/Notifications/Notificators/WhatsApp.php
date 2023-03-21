<?php

namespace App\AbstractMethod\Notifications\Notificators;

use App\AbstractMethod\Notifications\Interfaces\Sender;
use App\AbstractMethod\Notifications\Notification;
use App\AbstractMethod\Notifications\Senders\WhatsAppSender;
use App\Container;
use Exception;

class WhatsApp extends Notification
{

    /**
     * @throws Exception
     */
    protected function sender(): Sender
    {
        return Container::singleton(WhatsAppSender::class);
    }
}