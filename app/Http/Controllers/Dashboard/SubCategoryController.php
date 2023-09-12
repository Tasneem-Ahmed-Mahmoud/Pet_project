<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SubCategoryRequest;

class SubCategoryController extends Controller
{
    
public function index(){
    $sub_categories=SubCategory::paginate(20,['id','name']);
    return responseSuccessData($sub_categories);
}
    
    public function store(SubCategoryRequest $request){
     $sub_category=SubCategory::create($request->validated());
    return responseSuccessData($sub_category);
    }
}
