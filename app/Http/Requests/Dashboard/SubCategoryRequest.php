<?php

namespace App\Http\Requests\Dashboard;

use App\Rules\UniqueCategorySubCategory;
use App\Http\Requests\Api\BaseFormRequest;


class SubCategoryRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        return [
            'name'=>['required','max:100',new UniqueCategorySubCategory ],
            'category_id'=>['required','exists:categories,id'],
        ];
    }
}
