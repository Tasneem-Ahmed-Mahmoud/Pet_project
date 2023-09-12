<?php

namespace App\Http\Requests\Dashboard;

use App\Rules\UniqueServiceSubService;
use App\Http\Requests\Api\BaseFormRequest;


class SubServiceRequest extends BaseFormRequest
{
    
    public function rules(): array
    {
        return [
            'name'=>['required','max:100',new UniqueServiceSubService ],
            'service_id'=>['required','exists:services,id'],
            'description'=>['required','max:500'],
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
