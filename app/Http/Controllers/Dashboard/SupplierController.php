<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    
public function index(){
  $suppliers=Supplier::paginate(20,['id','name','email','status','attachment' ]);
  return responseSuccessData($suppliers);
    }



    public function verified(Supplier $supplier){
        $supplier->update([
            'status'=>'verified'
        ]);
return responseSuccessMessage('supplier verified successfully');
    }
}
