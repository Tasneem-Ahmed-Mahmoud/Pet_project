<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseFormRequest;

class UserRegisterRequest extends BaseFormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:20',
            'email' => 'email|required|min:3|max:40|unique:users,email,' . $this->id,
            'address' => 'required|min:3|max:100',
            'address_type'=>'required|in:home,work,other',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|regex:/^01[0125][0-9]{8}$/|unique:users,phone,' . $this->id,
            'password' => 'required|min:8|confirmed|max:20',
            'city_id' => 'required|exists:cities,id',
            'governorate_id' => 'required|exists:governorates,id',
        ];
    }
}
