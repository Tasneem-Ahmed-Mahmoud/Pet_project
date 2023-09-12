<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index(){
        $categories=Category::paginate(20,['id','name']);
        return responseSuccessData($categories);
    }
    public function store(CategoryRequest $request){

        $category=Category::create($request->validated());
        return responseSuccessData($category);
    }
}
