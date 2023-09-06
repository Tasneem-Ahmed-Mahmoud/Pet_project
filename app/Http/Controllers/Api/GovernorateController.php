<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    
    public function index(){
        $governorates=Governorate::get(['name','id']);
        return responseSuccessData($governorates);
    }
}
