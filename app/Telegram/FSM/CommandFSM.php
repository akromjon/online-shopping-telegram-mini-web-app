<?php


declare(strict_types=1);


namespace App\Telegram\FSM;

use App\Models\TelegramUser;
use App\Telegram\FSM\Base;
use App\Telegram\Menu\Menu;
use Telegram\Bot\Laravel\Facades\Telegram;


class CommandFSM extends Base
{
    protected function route(): void
    {
        match ($this->message) {
            '/start' => $this->handleStart(),
            default => null
        };
    }

    protected function handleStart(): void
    {
        $user = getUser();

        Telegram::sendMessage(params: Menu::getWebApp(chatId: $user->chat_id));
    }


}
