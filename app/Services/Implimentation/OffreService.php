<?php


namespace App\Services\Implimentation;



use App\Enums\Statut;
use App\Models\Offre;
use App\Services\ITag;
use App\Services\IUser;
use App\Services\IOffre;
use App\Services\ICategorie;
use App\Services\IVehiculeService;
use Illuminate\Support\Facades\Auth;
use App\Repository\Interfaces\OffreInterface;

class OffreService implements IOffre
{
    private OffreInterface $offre_repositery;
    private ICategorie $categorie_services;
    private ITag $tag_services;
    private IUser $user_services;
    private IVehiculeService $ivehicule_service;




    public function __construct(OffreInterface $offre_repositery, ICategorie $categorie_services, ITag $tag_services, IUser $user_services, IVehiculeService $ivehicule_service)
    {
        $this->offre_repositery = $offre_repositery;
        $this->categorie_services = $categorie_services;
        $this->tag_services = $tag_services;
        $this->user_services = $user_services;
        $this->ivehicule_service = $ivehicule_service;
    }

    public function create($data)
{
    $categorie = $this->categorie_services->findByOne($data['categorie']);
    $vehicule = $this->ivehicule_service->findByOne($data['vehicule']);
    $email=Auth::user()->email;

    $user = $this->user_services->findByEmail($email);

    $offres = new Offre();
    $offres->titre = $data["titre"];
    $offres->description = $data["description"];
    $offres->budjet = $data["budjet"];
    $offres->status = Statut::PENDING;
    $offres->duree_disponibilite = $data["duree_disponibilite"];
    $offres->image = isset($data["image"]) ? $data["image"]->store('images/offres', 'public') : null;
    $offres->categorie()->associate($categorie);
    $offres->vehicule()->associate($vehicule);
    $offres->user()->associate($user);

    // Save the Offre instance to generate the offer_id
    $offres->save();

    // Sync tags after saving the Offre
    $tagIds = [];
    foreach ($data['tags'] as $tagName) {
        $tag = $this->tag_services->findByOne($tagName);
        if ($tag) {
            $tagIds[] = $tag->id;
        }
    }
    $offres->tags()->sync($tagIds);

    return $this->offre_repositery->create($offres);
}

    public function update($data)
    {        
        $email=Auth::user()->id;

    $user = $this->user_services->getUser($email);
    $categorie = $this->categorie_services->findByOne($data['categorie']);
    $vehicule = $this->ivehicule_service->findByOne($data['vehicule']);
    
        $offres = $this->offre_repositery->findById($data["id"]);
        $offres->titre = $data["titre"];
        $offres->description = $data["description"];
        $offres->budjet = $data["budjet"];
        $offres->status =$data["status"];
        $offres->duree_disponibilite = $data["duree_disponibilite"];
        $offres->image = isset($data["image"]) ? $data["image"]->store('images/offres', 'public') : null;
        $offres->categorie()->associate($categorie);
        $offres->vehicule()->associate($vehicule);   
        $offres->user()->associate($user);             
        $tags = $this->tag_services->findById($data['tags']);
        $offres->tags()->sync($tags);

        return $this->offre_repositery->update($offres);
    }

    public function delete($id)
    {
        return $this->offre_repositery->delete($id);
    }

    public function show()
    {
        return $this->offre_repositery->show();
    }

    public function findByFields($email)
    {
        return $this->offre_repositery->findbyOne($email);
    }
    public function findbyName($titre)
    {
        return $this->offre_repositery->findbyOne($titre);
    }
    public function getUserOffreDetails($offre)
    {
        $client =  Auth::user()->id;
        return $this->offre_repositery->getUserOffreDetails($offre,$client);
    }
}
