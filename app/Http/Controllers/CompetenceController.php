<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteCompetences;
use Exception;
use App\Models\Competence;
use App\Services\ICompetence;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreCompetenceRequest;
use App\Http\Requests\UpdateCompetenceRequest;

class CompetenceController extends Controller
{
    private ICompetence $competence_service;

    public function __construct(ICompetence $competence_service)
    {
        $this->competence_service = $competence_service;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Competences = $this->competence_service->show();

        return view('Admin.Competence.Competence', compact('Competences'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetenceRequest $request)
    {
        try {
            $this->competence_service->create($request->all());

            session()->flash('succMessage', 'Competence created successfully!');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());

            session()->flash('ErrMessage', 'There was a problem creating the Competence.');
            return redirect()->back()->withInput();
        }    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetenceRequest $request)
    {
        try {

            $this->competence_service->update($request->all());

            session()->flash('succMessage', 'competence updated successfully!');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());

            session()->flash('ErrMessage', 'There was a problem updating the competence.');
            return redirect()->back()->withInput();
        }    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(DeleteCompetences $request)
    {
        try {
            $this->competence_service->delete($request->id);

            session()->flash('succMessage', 'competence deleted successfully!');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());

            session()->flash('ErrMessage', 'There was a problem deleting the competence.');
            return redirect()->back()->withInput();
        }    }
}
