<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\DTOs\userDTO;
use App\Services\IUser;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    protected IUser $user_service;
    public function  __construct(IUser $user_service)
    {
        $this->user_service = $user_service;
    }
    public function index()
    {


        return view("Pages.login");
    }
    public function login(LoginRequest $request)
    {


        if (!$request->validated()) {
            return back();
        }



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return response()->json(["message" => "Not woking"]);
        }

        $user =   $this->user_service->findByEmail($request->email);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route("client.offre.show");
    }
    public function Vregister()
    {


        return view("Pages.register");
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
        $getRole = Roles::CLIENT;

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $this->user_service->create($data, $getRole);

        return redirect("/login");
    }
}
