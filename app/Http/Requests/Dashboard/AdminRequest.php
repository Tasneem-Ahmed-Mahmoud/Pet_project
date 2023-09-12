<?php

namespace App\Http\Requests\Dashboard;

use App\Http\Requests\Api\BaseFormRequest;
class AdminRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:20',
            'email' => 'email|required|min:3|max:40|unique:admins,email,except,id' ,
            'password' => 'required|min:8|confirmed|max:20',
        ];
    }
}
