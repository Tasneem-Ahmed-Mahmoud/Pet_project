<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\PhotoRequest;
use App\Http\Requests\Api\Auth\LoginRequest;


class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['login']]);
    }

    public function login(LoginRequest $request)
    {

        if (!$token = auth()->guard('admin')->attempt($request->only(['email', 'password']))) {

            return responseErrorMessage('Unauthorized', 401);
        }

        return responseSuccessData([
            'token' => $token
        ]);
    }
    

    public function logout()
    {
        auth()->guard('admin')->logout();
        return responseSuccessData('admin Successfully logged out');
    }
}
