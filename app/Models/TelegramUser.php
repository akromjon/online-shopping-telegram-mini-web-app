<?php

namespace App\Models;

use App\Models\Enums\MessageSender;
use App\Models\Enums\TelegramUserChatStatus;
use App\Models\Enums\TelegramUserRole;
use App\Models\Enums\TelegramUserStatus;
use App\Models\Enums\TelegramUserType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TelegramUser extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'chat_status' => TelegramUserChatStatus::class,
            'status' => TelegramUserStatus::class,
            'type' => TelegramUserType::class,
            'last_used_at'=>'datetime',
            'role'=>TelegramUserRole::class
        ];
    }


}
