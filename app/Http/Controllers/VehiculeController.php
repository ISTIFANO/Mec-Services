<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Log;
use App\Repository\VehiculeRepository;
use App\Http\Requests\StoreVehiculeRequest;
use App\Http\Requests\UpdateVehiculeRequest;
use App\Repository\Interfaces\VehiculeInterface;

class VehiculeController extends Controller
{
    protected VehiculeInterface $vehicule_repository;

    public function __construct(VehiculeInterface $vehicule_repository)
    {
        $this->vehicule_repository = $vehicule_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Vehicules = $this->vehicule_repository->show();

        return view('Admin.Vehicule.Vehicule', compact('Vehicules'));     }

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
            $this->vehicule_repository->create($request->validated());

            session()->flash('succMessage', 'vehicule created successfully!');

            return redirect()->route('vehicules.index');
        
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
    public function show()
    {
        try {
            $vehicule = $this->vehicule_repository->show();
    
            return redirect()->route('Admin.vehicule', compact('vehicule'));
    
                return back();
    
            } catch (Exception $e) {
    
                Log::error($e->getMessage());
    
                return redirect()->back();
            }    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculeRequest $request, Vehicule $vehicule)
    {
        try {
            $this->vehicule_repository->update($request->validated());

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
    public function destroy($id)
    {

        try {
            
            $this->vehicule_repository->delete($id);

            session()->flash('succMessage', 'vehicule deleted  successfully!');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' vehicule has a problemes.');

            return redirect()->back()->withInput();
        }
    }
}
