<?php

namespace App\Http\Requests\Dashboard;

use App\Http\Requests\Api\BaseFormRequest;


class CategoryRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        return [
            'name'=>'required|max:40|unique:categories,name,except,id',
        ];
    }
}
