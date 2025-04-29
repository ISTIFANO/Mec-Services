<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use Illuminate\Http\Request;

class ContractController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContractRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContractRequest $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        //
    }
    public function generatePDF(Request $data)
{
  $pdf = app('dompdf.wrapper');
  $pdf->loadView('Client.PDF.contract', [
    'title' => 'AlMechanicien Contract',
    'mechanicien'=> "AHMED",
    'client'=> "REHAB",
    'service_titre' =>"GJWN",
    'vehucule_image' => "https://i.pinimg.com/originals/82/c6/ec/82c6eca444a3ebd130d92f2b7791e6cc.jpg",
    'description' => "Un véhicule est « ce qui sert à transmettre, à transporter » mais cet article se focalise sur ce qui concerne le transport physique, quel que soit le milieu et les moyens mis en œuvre pour y arriver. …",
    'rule' => "khasek Tzawej",
    'logo' => "https://theethicalagency.co.za/wp-content/uploads/2024/04/Logo-design-anatomy-2.png",
    'tampon' => asset("/images/img/tampon.png"),
    'footer' => 'by <a href="AlMechanicien">AlMechanicien.ma</a>'
  ]);

  return $pdf->download('blade.pdf');
}
}
