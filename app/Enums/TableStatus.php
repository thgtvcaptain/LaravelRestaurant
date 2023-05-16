<?php
namespace App\Enums;
use PhpParser\Node\Expr\Cast\String_;

enum TableStatus: String
{
    case Pending = 'pending';
    case Available = 'available';
    case Unavailable = 'unavailable';
}