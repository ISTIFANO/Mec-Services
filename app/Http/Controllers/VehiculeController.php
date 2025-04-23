<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Vehicule;
use App\Services\IVehiculeService;
use Illuminate\Support\Facades\Log;
use App\Repository\VehiculeRepository;
use App\Http\Requests\StoreVehiculeRequest;
use App\Http\Requests\DeleteVehiculeREQUEST;
use App\Http\Requests\UpdateVehiculeRequest;
use App\Repository\Interfaces\VehiculeInterface;
use App\Services\IUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehiculeController extends Controller
{
    protected IVehiculeService $vehicule_service;
    protected IUser $user_servces;

    public function __construct(IVehiculeService $vehicule_service,  IUser $user_servces)
    {
        $this->vehicule_service = $vehicule_service;
        $this->user_servces = $user_servces;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Vehicules = $this->vehicule_service->show();

        return view('Admin.Vehicule.Vehicule', compact('Vehicules'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculeRequest $request)
    {
        try {
            
    $email = auth()->user()->email; 
    $data = array_merge($request->all(), ["email" => $email]); 
    
    // dd($data);
            $this->vehicule_service->create($data);

            session()->flash('succMessage', 'vehicule created successfully!');

            return back();
        
        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' vehicule has a problemes.');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function getVehicules()
    {
        
        $vehicules = Auth::user()->vehicules;
            // dd($vehicules); 
        try {
            // $users = $this->user_servces->getVehicules($id);
            return view('Admin.Vehicule.AllVehicule', compact('vehicules'));

        } catch (Exception $e) {

            Log::error($e->getMessage());

            return redirect()->back()->with('ErrMessage', 'Unable to fetch vehicule details.');
        }
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculeRequest $request)
    {
        try {

            
            $this->vehicule_service->update($request->all());

            session()->flash('succMessage', 'vehicule updated successfully!');

            return redirect()->route('vehicules.index');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' category has a problemes.');

            return redirect()->back()->withInput();
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(DeleteVehiculeREQUEST $request)
    {

        try {
            
            $this->vehicule_service->delete($request->id);

            session()->flash('succMessage', 'vehicule deleted  successfully!');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' vehicule has a problemes.');

            return redirect()->back()->withInput();
        }
    }

    public function deletevehicules(Request $request)
    {
        try {
            
            $this->vehicule_service->delete($request->vehicle_id);

            session()->flash('succMessage', 'vehicule deleted  successfully!');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' vehicule has a problemes.');

            return redirect()->back()->withInput();
        }
    }
}
