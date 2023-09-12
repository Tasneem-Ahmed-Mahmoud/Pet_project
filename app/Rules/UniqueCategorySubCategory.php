<?php

namespace App\Rules;

use Closure;
use App\Models\SubCategory;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueCategorySubCategory implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $categoryId = request('category_id');

        // Check if the combination of category_id and sub-category name is unique
        $count= SubCategory::where('category_id', $categoryId)
                         ->where('name', $value)
                         ->exists();
                         if ($count) {
                            $fail('The selected category and sub-category combination already exists.');
                        }
    }
}
