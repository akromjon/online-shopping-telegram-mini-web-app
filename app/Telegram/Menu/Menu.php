<?php

declare(strict_types=1);


namespace App\Telegram\Menu;

use App\Models\Enums\MessageSender;
use App\Models\Enums\MessageType;
use Telegram\Bot\Keyboard\Keyboard;

final class Menu
{
    protected static function makeKeyboardButton(): Keyboard
    {
        return Keyboard::make()
            ->setResizeKeyboard(true)
            ->setOneTimeKeyboard(false);
    }
    protected static function makeInlineKeyboard(): Keyboard
    {
        return Keyboard::make()
            ->inline()
            ->setResizeKeyboard(true)
            ->setOneTimeKeyboard(false);
    }
    public static function getWebApp(int $chatId): array
    {
        $replyMarkup = self::makeInlineKeyboard()
            ->row(buttons: [
                Keyboard::inlineButton([
                    'text' => 'store',
                    'web_app' => [
                        'url'=>config(key: 'app.url')."/web-app"
                    ],
                ]),
            ]);


        return [
            'text'=>'🏠 Asosiy Menyu',
            'chat_id'=>$chatId,
            'reply_markup'=>$replyMarkup,
        ];
    }
}
