<?php

namespace App\Rules;

use Closure;
use App\Models\SubService;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueServiceSubService implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $serviceId = request('service_id');

        // Check if the combination of service_id and sub-service name is unique
        $count= SubService::where('service_id', $serviceId)
                         ->where('name', $value)
                         ->exists();


                         if ($count) {
                            $fail('The selected service and sub-service combination already exists.');
                        }
    }


    // public function message()
    // {
    //     return 'The selected service and sub-service combination already exists.';
    // }


}
