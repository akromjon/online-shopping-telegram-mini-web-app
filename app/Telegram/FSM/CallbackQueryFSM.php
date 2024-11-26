<?php

declare(strict_types=1);


namespace App\Telegram\FSM;

use App\Jobs\CopyMessageJob;

use App\Models\TelegramNotification;
use App\Telegram\Menu\Menu;
use App\Telegram\Telegram;
use Illuminate\Support\Facades\Log;

class CallbackQueryFSM extends Base
{
    protected function route(): void
    {
        match ($this->message->m) {
            default => Log::error('Unknown CallbackQuery type returned'),
        };
    }



}
