<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {


        $request->validate(["email" => "required", "password" => "required"]);


        $user = User::where("email", $request["email"])->first();

        // if (!$user || !Hash::check($request['password'], $user->password)) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return response()->json(["message" => "Not woking"]);
        }



        return $user;
    }

    public function logout()
    {

        // auth()->user()->delete();


        return redirect("/");
    }

    public function register(Request $request)
    {

        $validation =   $request->validate(["firstname" => "required", "lastname" => "required", "email" => "required", "password" => "required"]);

        if (!$validation) {
            return response()->json(["message" => "Not woking"]);
        }

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);






    
        return $user;
    }
}
