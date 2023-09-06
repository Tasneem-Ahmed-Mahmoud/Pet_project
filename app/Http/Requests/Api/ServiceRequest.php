<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        return [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name'=>'required|max:40|unique:services,name,'.$this->id,
            'description'=>'required|max:300'
        ];
    }
}
