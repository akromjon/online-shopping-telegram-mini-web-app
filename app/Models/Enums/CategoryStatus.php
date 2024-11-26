<?php

namespace App\Models\Enums;
enum CategoryStatus: string
{
    case ACTIVE = "active";
    case INACTIVE = "inactive";
    case SOLD_OUT = "sold_out";
    case DISCOUNT = "discount";
}
