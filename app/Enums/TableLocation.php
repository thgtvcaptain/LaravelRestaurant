<?php
namespace App\Enums;
use PhpParser\Node\Expr\Cast\String_;

enum TableLocation: String
{
    case Front = 'front';
    case Outside = 'outside';
    case Inside = "inside";
}