<?php

use App\Http\Controllers\BotController;
use App\Http\Controllers\WebAppController;
use App\Http\Middleware\TelegramUserChatStatusUpdateMiddleware;
use App\Http\Middleware\TelegramUserLastUsedAtUpdatorMiddleware;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;
use App\Http\Middleware\TelegramWebhookAccessMiddleware;


Route::get(uri: '/set-webhook', action: function (): JsonResponse {

    $res = Telegram::setWebhook(params: [
        'drop_pending_updates' => true,
        'url' => config(key: 'app.url') . config(key: 'telegram.bots.mybot.webhook_url'),
        'secret_token' => config(key: 'telegram.bots.mybot.secret_token'),
        'max_connections' => config(key: 'telegram.bots.mybot.max_connections'),
    ]);

    return response()->json(data: [
        'res' => $res
    ]);
});

Route::get('/web-app',[WebAppController::class,'getApp']);


Route::post(
    uri: config(key: 'telegram.bots.mybot.webhook_url'),
    action: [BotController::class, 'handleWebhook']
)
    ->withoutMiddleware(middleware: ['web'])
    ->middleware(middleware: [
        TelegramWebhookAccessMiddleware::class,
        TelegramUserChatStatusUpdateMiddleware::class,
        TelegramUserLastUsedAtUpdatorMiddleware::class
    ]);

