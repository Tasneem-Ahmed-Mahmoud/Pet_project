<?php

namespace App\Rules;

use Closure;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueSupplierSubService implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // $existingRecord = DB::table('sub_service_supplier')
        // ->where('supplier_id', Supplier::latest()->first()->id)
        // ->where('service_id', request('sub_service_id'))
        // ->exists();

        
    }
}
