<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function index(){
        $services=Service::paginate(20,['id','name']);
        return responseSuccessData($services);
    }
    public function store(ServiceRequest $request){

        $service=Service::create($request->validated());
        return responseSuccessData($service);
    }




    
}
