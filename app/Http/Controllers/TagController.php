<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tag;
use App\Services\ITag;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\DeleteTagREQUEST;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Requests\StoreTagRequest;  
use App\Repository\Interfaces\TagInterface;

class TagController extends Controller
{
    private ITag $tag_service;

    public function __construct( ITag $tag_service)
    {
        $this->tag_service = $tag_service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $Tags = $this->tag_service->show();

        return view('Admin.Tag.Tags', compact('Tags')); 
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        try {
            $this->tag_service->create($request->all());

            session()->flash('succMessage', 'tag created successfully!');

            return back();
        


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' tag has a problemes.');

            return redirect()->back()->withInput();
        }    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $tag =    $this->tag_service->show();
    
            return redirect()->route('Admin.tag', compact('tag'));
    
                return back();
    
            } catch (Exception $e) {
    
                Log::error($e->getMessage());
    
                return redirect()->back();
            }    
        
        }

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
    public function update(UpdateTagRequest $request)
    {

        try {
            $this->tag_service->update($request->all());

            session()->flash('succMessage', 'tag updated successfully!');

            return back();
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' tag has a problemes.');

            return redirect()->back()->withInput();
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(DeleteTagREQUEST $request)
    {
        try {
            
            $this->tag_service->delete($request->id);

            session()->flash('succMessage', 'tag deleted  successfully!');
        
            return back();


        } catch (Exception $e) {

            Log::error($e->getMessage());

            session()->flash('ErrMessage', ' tag has a problemes.');

            return redirect()->back()->withInput();
        }    }
}
