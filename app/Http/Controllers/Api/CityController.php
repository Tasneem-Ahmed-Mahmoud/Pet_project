<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index(){
        $cities=City::get(['name','id']);
        return responseSuccessData($cities);
    }


    public function governorate_cities($governorate_id){
        $cities=City::where('governorate_id',$governorate_id)->get(['name','id']);
        return responseSuccessData($cities);
    }
}
