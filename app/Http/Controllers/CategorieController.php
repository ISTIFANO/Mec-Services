<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Repository\Interfaces\CategorieInterface;
use Illuminate\Support\Facades\Log;

class CategorieController extends Controller
{
    protected CategorieInterface $categorie_repository;

    public function __construct(CategorieInterface $categorie_repository)
    {
        $this->categorie_repository->$categorie_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Admin.Categorie");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
        try {
            $this->categorie_repository->create($request->validated());

            session()->flash('succMessage', 'Categorie created successfully!');

            return redirect()->route('categories.index');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' category has a problemes.');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
        $categorie =    $this->categorie_repository->show();

        return redirect()->route('Admin.Categorie', compact('categorie'));

            return back();

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
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request)
    {
        try {
            $this->categorie_repository->update($request->validated());

            session()->flash('succMessage', 'Categorie updated successfully!');

            return redirect()->route('categories.index');
        
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
            
            $this->categorie_repository->delete($id);

            session()->flash('succMessage', 'Categorie deleted  successfully!');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' category has a problemes.');

            return redirect()->back()->withInput();
        }
    }
}
