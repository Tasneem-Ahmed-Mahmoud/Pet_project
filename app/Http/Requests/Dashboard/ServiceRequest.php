<?php

namespace App\Http\Requests\Dashboard;

use App\Http\Requests\Api\BaseFormRequest;


class ServiceRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        return [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name'=>'required|max:40|unique:services,name,except,id',
            'description'=>'required|max:300'
        ];
    }
}
