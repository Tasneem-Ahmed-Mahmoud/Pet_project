<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\user as MiddlewareUser;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\PhotoRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\UserRegisterRequest;

class UserAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user', ['except' => ['login', 'register']]);
    }

    public function login(LoginRequest $request)
    {

        if (!$token = auth()->guard('user')->attempt($request->only(['email', 'password']))) {

            return responseErrorMessage('Unauthorized', 401);
        }

        return responseSuccessData([
            'token' => $token
        ]);
    }
    public function register(UserRegisterRequest $request)
    {

        $user = User::create([
            // 'image' =>$request->file('image')->store(User::PATH),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'address_type' => $request->address_type,
            'governorate_id' => $request->governorate_id,
            'city_id' => $request->city_id,
            'password' => Hash::make($request->password),
        ]);

        return responseSuccessMessage("User created successfully", 201);
    }

    public function logout()
    {
        auth()->guard('user')->logout();
        return responseSuccessData('User Successfully logged out');
    }
}
