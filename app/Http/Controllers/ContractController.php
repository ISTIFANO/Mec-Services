<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use App\Services\IContract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    private IContract $contract_service;
    public function __construct(IContract $contract_service)
    {
        $this->contract_service = $contract_service;
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
    $array =["mechanicien_id" => $data->mechanicien_id,
  "service_id" => $data->service_id,
  "client_id" => $data->client_id];
$pdf = $this->contract_service->generatePDF($array);

  return  $pdf->stream();
}
}
