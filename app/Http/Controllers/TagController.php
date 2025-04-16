<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tag;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreTagRequest;  
use App\Http\Requests\UpdateTagRequest;
use App\Repository\Interfaces\TagInterface;

class TagController extends Controller
{
    protected TagInterface $tag_repository;

    public function __construct(TagInterface $tag_repository)
    {
        $this->tag_repository->$tag_repository;
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
    public function store(StoreTagRequest $request)
    {
        try {
            $this->tag_repository->create($request->validated());

            session()->flash('succMessage', 'tag created successfully!');

            return redirect()->route('tags.index');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' category has a problemes.');

            return redirect()->back()->withInput();
        }    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $tag =    $this->tag_repository->show();
    
            return redirect()->route('Admin.tag', compact('tag'));
    
                return back();
    
            } catch (Exception $e) {
    
                Log::error($e->getMessage());
    
                return redirect()->back();
            }    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {

        try {
            $this->tag_repository->update($request->validated());

            session()->flash('succMessage', 'tag updated successfully!');

            return redirect()->route('tags.index');
        
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
            
            $this->tag_repository->delete($id);

            session()->flash('succMessage', 'tag deleted  successfully!');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' tag has a problemes.');

            return redirect()->back()->withInput();
        }    }
}
