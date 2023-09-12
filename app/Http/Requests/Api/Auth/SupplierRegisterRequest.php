<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseFormRequest;

class SupplierRegisterRequest extends BaseFormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:20',
            'email' => 'email|required|min:3|max:40|unique:suppliers,email,except,id' ,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|regex:/^01[0125][0-9]{8}$/|unique:suppliers,phone,except,id',
            'password' => 'required|min:8|confirmed|max:20',
            'commercial_name'=>'required|max:100',
            'attachment'=>'required|mimes:pdf|max:10000',
            'sub_service_id'=>'required',
            'sub_service_id.*' => '|exists:sub_services,id',
          
        ];
    }
}
