<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DateBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickedDate = Carbon::parse($value);
        $lastDate = Carbon::now()->addWeek();

        if( $pickedDate >= Carbon::now() && $pickedDate <= $lastDate ) {

        } else {
            $fail('The :attribute date must be in one week from now.');
        }
    }
}
