<?php

use App\Repository\Interfaces\ServiceInterface;
use Exception;
use App\Services\IService;
use Illuminate\Support\Facades\Log;




class S_Service implements IService
{
    protected ServiceInterface $service_repository;

    public function __construct(ServiceInterface $service_repository)
    {
        $this->service_repository->$service_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store($data)
    {
        try {
            $service =       $this->service_repository->create($data);


            return $service;

            return back();
        } catch (Exception $e) {

            Log::error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $service =    $this->service_repository->show();

            return $service;
        } catch (Exception $e) {

            Log::error($e->getMessage());
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update($data)
    {
        try {
            $service =    $this->service_repository->update($data);

            return  $service;
        } catch (Exception $e) {

            Log::error($e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {

            $service =  $this->service_repository->delete($id);


            return $service;
        } catch (Exception $e) {

            Log::error($e->getMessage());
        }
    }
}
