<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\DTOs\userDTO;
use App\Http\Requests\LoginRequest;
use App\Services\IUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function  __construct(protected IUser $user_service)
    {
        $this->user_service = $user_service;
    }

    public function login(LoginRequest $request)
    {


        if (!$request->validated()) {

            return back();
        }



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return response()->json(["message" => "Not woking"]);
        }

        $user = $this->user_service->findByFields($request->email);


        return userDTO::User($user);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(RegisterRequest $request)
    {

        if (!$request->validated()) {
            return response()->json(["message" => "Not woking"]);
        }

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $this->user_service->create($data);

        return redirect("/login");
    }
}
