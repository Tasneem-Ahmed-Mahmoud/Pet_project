<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\Api\BaseFormRequest;

class SupplierRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        
        return [
            'email' => 'email|required|min:3|max:40|unique:suppliers,email,except,id',
            'name' => 'required|min:3|max:20',
            'attachment' => 'required|mimes:pdf|max:2048',
            'commercial_name'=> 'required|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|regex:/^01[0125][0-9]{8}$/|unique:suppliers,phone,except,id',
            'password' => 'required|min:8|confirmed|max:20',
           
        ];
    }
}
