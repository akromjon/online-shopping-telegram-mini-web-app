<?php

use App\Models\TelegramUser;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Objects\Update;

if (!function_exists(function: 'getWebhookUpdate')) {
    function getWebhookUpdate(): Update
    {
        return Telegram::getWebhookUpdate();
    }
}

if (!function_exists(function: 'getUser')) {
    function getUser(): ?TelegramUser
    {
        return app()->bound(abstract: 'telegramUser') ? app(abstract: 'telegramUser') : null;
    }
}
