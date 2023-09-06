<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index()
    {
dd('suppliers');
    }
    public function store(SupplierRequest $request)
    {
        $attachment = uploadImage($request->attachment, Supplier::PATH);
        $supplier = Supplier::create([
            'name' => $request->name,
            'attachment' => $attachment,
            'commercial_name' => $request->commercial_name,
        ]);
        return responseSuccessData($supplier, 'supplier created successfully');
    }
}
