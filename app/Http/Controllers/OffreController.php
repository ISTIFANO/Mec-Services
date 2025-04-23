<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Services\ITag;
use App\Services\IUser;
use App\Services\IOffre;
use App\Services\ICategorie;
use Illuminate\Http\Request;
use App\Services\IVehiculeService;
use App\Http\Requests\Delete_offres;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOffreRequest;
use App\Http\Requests\UpdateOffreRequest;
use App\Http\Requests\getUserOffreDetailsRequest;
use Illuminate\Contracts\View\View;

class OffreController extends Controller
{
    protected ICategorie $categorie_service;
    protected ITag $tag_service;
    protected IVehiculeService $ivehicule_service;
    protected IOffre $offre_services;
    protected IUser $user_services ;

    public function __construct(ICategorie $categorie_service, IUser $user_services, ITag $tag_service , IVehiculeService $ivehicule_service,IOffre $offre_services)
    {
        $this->categorie_service = $categorie_service;
        $this->tag_service = $tag_service;
        $this->ivehicule_service = $ivehicule_service;
        $this->offre_services = $offre_services;
        $this->user_services = $user_services;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $offres = Offre::with(['categorie', 'vehicule', 'tags'])->get();
        $users = $this->user_services->FindClient();

        $categories = $this->categorie_service->show();
        $vehicules = $this->ivehicule_service->show();
        $tags = $this->tag_service->show();
        return view('Admin.Offre.Offre', compact('offres', 'categories', 'vehicules', 'tags','users'));
   
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
public function store(StoreOffreRequest $request)
{
    if (!$request->validated()) { 
        return back()->with("error", "Validation failed");
    }

    $user_email = auth()->user()->email; 
    $data = array_merge($request->all(), ["user_email" => $user_email]); 
    $this->offre_services->create($data);

    return back()->with("success", "Offre created successfully");
}

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        $offers = Offre::with(['categorie', 'vehicule', 'tags'])->get();

        $categories = $this->categorie_service->show();
        $vehicules = $this->ivehicule_service->show();
        $vehicles = $this->ivehicule_service->show();


        $tags = $this->tag_service->show();
        return view('Admin.Offre.ClientOffre', compact('offers', 'categories', 'vehicules', 'vehicles','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
  
    public function update(Request $request)
    {
        // if(!$request->validate()){

        //     return back();
        // }
        // dd($request->all());
        
        $this->offre_services->update($request->all());

        return back()->with("success", "Offre created successfully");    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Delete_offres $request)
    {
        $this->offre_services->delete($request->id);

        return back();
    }

    public function getUserOffreDetails(getUserOffreDetailsRequest $request)
    {
        try {
            $offre = $this->offre_services->getUserOffreDetails($request->id);
            $user = $this->user_services->getUser($request->client_id);
            return view("Admin.Offre.Detailes", compact("offre", "user"));
        } catch (\Exception $e) {
            return back()->with("error", "An error occurred: " . $e->getMessage());
        }
    }

    public function showOffre(Offre $offre)
    {
     $offers = Offre::with(['categorie', 'vehicule', 'tags'])->where("client_id", Auth::user()->id)->get();
        
     $categories = $this->categorie_service->show();
       $vehicules = $this->ivehicule_service->show();
        $vehicles = $this->ivehicule_service->GetUserVehicule(Auth::user()->id);

        $tags = $this->tag_service->show();
        return view('Admin.Offre.ClientOffre', compact('offers', 'categories', 'vehicules', 'vehicles','tags'));
    }
    }

