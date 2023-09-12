<?php

namespace App\Http\Controllers\Api\Auth;


use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\SupplierRegisterRequest;


class SupplierAuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:supplier', ['except' => ['login', 'register']]);
    }

    public function login(LoginRequest $request)
    {

        if (!$token = auth()->guard('supplier')->attempt($request->only(['email', 'password']))) {

            return responseErrorMessage('Unauthorized', 401);
        }

        return responseSuccessData([
            'token' => $token
        ]);
    }

 
    public function register(supplierRegisterRequest $request)
    {

        // dd($request);
        $supplier = supplier::create([
            'image' => $request->image,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'commercial_name' => $request->commercial_name,
            'attachment' =>$request->file('attachment')->store(Supplier::PATH.'/attachment'),
            'password' => Hash::make($request->password),
        ]);

        return responseSuccessMessage("supplier created successfully", 201);
    }

    public function logout()
    {
        auth()->guard('supplier')->logout();
        return responseSuccessData('supplier Successfully logged out');
    }
}
