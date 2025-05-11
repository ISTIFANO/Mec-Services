<?php

namespace App\Http\Controllers;

use Exception;
use App\Enums\Roles;
use App\Services\IPosition;
use App\Services\IUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    private IUser $user_service;
    private IPosition $iPosition;
    public function __construct(IUser $user_service,IPosition $iPosition)
    {
        $this->user_service = $user_service;
        $this->iPosition = $iPosition;

    }

    public function index()  {
        $positions = $this->iPosition->show();
        return view('Admin.Utilisateur.Profile',compact('positions'));

    }

    public function show()
    {
        try {
            $users = $this->user_service->show();

            return view('Admin.Utilisateur.Utilisateur', compact('users'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back();
        }


    }
  public function store( Request $request)
    {
        $getRole = Roles::CLIENT;

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        
        try {
            $this->user_service->create($data, $getRole);     

            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back();
        }

        
    }
    public function update( Request $request)
    {
     try {
            $this->user_service->update($request->all());     
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back();
        }

        
    }

  public function Updateinformation( Request $request)
    {   
        
        
        try {

       $this->user_service->updateInformation($request->all());
       
            return back()->with('success', 'Informations mises à jour avec succès.');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back();
        }

        
    }


}
