<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\IService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repository\ServiceRepository;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Services\IMechanic;
use App\Services\IOffre;

class ServiceController extends Controller
{
    protected IService $service;
 


    public function __construct(IService $service )
    {
        $this->service = $service;
     

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }       

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // $user_id = Auth::user()->mechanicien?->user_id;

            $data = [
                "mechanicien_id" => $request->mechanicien_id,
                "client_id" => $request->client_id,
                "offre_id" => $request->offre_id
            ];
            $this->service->create($data);

            return back()->with('success', 'Service created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $services = $this->service->show();


        return view("Admin.Service.ServiceClient", compact("services"));
    }

public function find(Request $request)
{
    $service = $this->service->showOne($request->service_id);


return view("Admin.Service.ServiceDetails",compact("service"));    }

public function showMechanicien(Request $request)
{
    $service = $this->service->showMechanicien($request->offer_id);
    $serviceId = $request->service_id;

return view("Admin.Service.Condudatures",compact("service","serviceId")); 
}


public function ApprouveService(Request $request)
{
$service =  $this->service->ApprouveService($request->serviceId);

return view("Admin.Service.ServiceDetails",compact("service")); ; 
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
