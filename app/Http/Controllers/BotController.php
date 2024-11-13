<?php

namespace App\Http\Controllers;

use App\Telegram\FSM\CallbackQueryFSM;
use App\Telegram\FSM\CommandFSM;
use App\Telegram\FSM\MessageFSM;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
class BotController extends Controller
{
    public function handleWebhook(): JsonResponse
    {
        $type = $this->objectType(update: getWebhookUpdate());

        logger('load');

        match ($type) {
            'message' => MessageFSM::handle($type),
            'callback_query' => CallbackQueryFSM::handle($type),
            'command' => CommandFSM::handle($type),
            default => Log::error(message: 'Unknown message type returned from TelegramBotController'),
        };

        return response()->json(data: [
            'status' => 'ok'
        ]);
    }
}
