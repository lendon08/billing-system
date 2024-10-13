<?php

namespace App\Enums;

enum InvoiceStatus: string
{
    case PENDING = 'Pending';
    case PAID = 'Paid';
    case OVERDUE = 'Overdue';
}
