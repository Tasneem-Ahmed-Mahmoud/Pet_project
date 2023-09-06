<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\BaseFormRequest;
class SubServiceRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        return [
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name'=>'required|max:40',
            'description'=>'required|max:300',
            'service_id'=>'required|exists:service,id'
        ];
    }
}
