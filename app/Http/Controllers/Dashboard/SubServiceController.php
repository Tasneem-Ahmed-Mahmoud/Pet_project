<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\SubService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SubServiceRequest;

class SubServiceController extends Controller
{


    public function index(){
        $sub_services=SubService::paginate(20,['id','name']);
        return responseSuccessData($sub_services);
    }
    public function store(SubServiceRequest $request){

        $sub_service=SubService::create($request->validated());
        return responseSuccessData($sub_service);
    }
}
