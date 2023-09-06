<?php


 
namespace App\Http\Controllers\Api\Auth;
 
use JWTAuth;

use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\Auth\UserLoginRequest;
use App\Http\Requests\Api\Auth\UserRegisterRequest;

class UserAuthController extends Controller
{



    public function login(UserLoginRequest $request)
    {


        $input = $request->only('email', 'password');
        $jwt_token = null;
  
        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ]);
        }
  
        return response()->json([
            'success' => true,
            'token' => $jwt_token,
        ]);

        // $credentials = $request->only('email', 'password');
        // $token = Auth::attempt($credentials);
        // if (!$token) {
        //     return  responseErrorMessage('Unauthorized', 401);
        // }
        // $user = Auth::user();
        // return responseSuccessData([
        //     'user' => $user,
        //     'authorization' => [
        //         'token' => $token,
        //         'type' => 'bearer',
        //     ]
        // ]);
    }
    public function register(UserRegisterRequest $request)
    {

        $user = User::create([
            'image'=>$request->image,
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
        Auth::gourd('user')->logout();
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}
