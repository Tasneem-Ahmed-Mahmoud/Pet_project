<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;

class ProductController extends Controller
{


public function index(){
    $products=Product::where('status','approved')->paginate(20,['id','name','price','offer','description','image']);
    return responseSuccessData($products);
}

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'offer' => $request->offer,
            'description' => $request->description,
            'image' => $request->file('image')->store(Product::PATH),
            'sub_category_id' => $request->sub_category_id,
            'quantity'=>$request->quantity
        ]);
        return responseSuccessMessage('product created successfully');
    }
}
