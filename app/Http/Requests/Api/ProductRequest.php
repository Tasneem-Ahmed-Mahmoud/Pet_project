<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\BaseFormRequest;

class ProductRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return[
        'name'=>'required|min:3|max:50',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price'=>'required|numeric',
        'description'=>'required|max:500|min:10',
        'offer'=>'required|numeric',
        'sub_category_id'=>'required|exists:sub_categories,id',
        'quantity'=>'required|integer'
    ];
    
    }
}
