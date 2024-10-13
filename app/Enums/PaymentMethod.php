<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case GCASH = 'GCash';
    case CASH = 'Cash';
    case BANK = 'Bank Transfer';
}
