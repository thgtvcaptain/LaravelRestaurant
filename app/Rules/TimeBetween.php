<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickedDate = Carbon::parse($value);
        $pickedTime = Carbon::createFromTime($pickedDate->hour, $pickedDate->minute, $pickedDate->second);

        $openTime = Carbon::createFromTimeString("17:00:00");
        $closedTime = Carbon::createFromTimeString("23:00:00");

        if ($pickedTime >= $openTime && $pickedTime <= $closedTime) {

        } else {
            $fail("The :attribute time must between 17:00 and 23:00");
        }
    }
}
