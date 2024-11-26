<?php

namespace App\Models;

use App\Models\Enums\CategoryStatus;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected function casts(): array
    {
        return [
            'status' => CategoryStatus::class,
        ];
    }
}
