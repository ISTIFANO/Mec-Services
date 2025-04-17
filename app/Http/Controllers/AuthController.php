<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Repository\Interfaces\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function  __construct(protected UserInterface $user_repositery)
    {
        $this->user_repositery = $user_repositery;
    }
    public function login(Request $request)
    {


        $request->validate(["email" => "required", "password" => "required"]);


        $user = User::where("email", $request["email"])->first();

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return response()->json(["message" => "Not woking"]);
        }



        return $user;
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

        $this->user_repositery->create($data);
        
        return redirect("/login");
    }
}
