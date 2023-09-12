<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products=Product::paginate(20,['id','name','price','offer','description','image','status']);
        return responseSuccessData($products);
    }




    public function approved(Product $product){
        $product->update(([
            'status'=>'approved'
        ]));
        return responseSuccessMessage('product approved successfully');
    }
}
