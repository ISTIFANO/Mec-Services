<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Categorie;
use App\Services\ICategorie;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller 
{
    private ICategorie $categorie_service;

    public function __construct(ICategorie $categorie_service)
    {
        $this->categorie_service = $categorie_service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categorie_service->show();

        return view('Admin.Categorie.Categorie', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(StoreCategorieRequest $request)
    {
        try {
            $this->categorie_service->create($request->all());

            session()->flash('succMessage', 'Categorie created successfully!');
            return redirect()->route('categories.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());

            session()->flash('ErrMessage', 'There was a problem creating the category.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $categorie = $this->categorie_service->show();

            return view('Admin.Categorie', compact('categorie'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('Admin.CategorieEdit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request)
    {
        try {
            $this->categorie_service->update($request->validated(), $request->id);

            session()->flash('succMessage', 'Categorie updated successfully!');
            return redirect()->route('categories.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());

            session()->flash('ErrMessage', 'There was a problem updating the category.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        try {
            $this->categorie_service->delete($id);

            session()->flash('succMessage', 'Categorie deleted successfully!');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());

            session()->flash('ErrMessage', 'There was a problem deleting the category.');
            return redirect()->back()->withInput();
        }
    }
}
