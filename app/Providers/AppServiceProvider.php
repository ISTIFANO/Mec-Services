<?php

namespace App\Providers;

use App\Models\User;
use App\Services\ITag;
use App\Services\IRole;
use App\Services\IUser;
use App\Services\IOffre;
use App\Services\IService;
use App\Services\IMechanic;
use App\Services\ICategorie;
use App\Services\ICompetence;
use App\Repository\TagRepository;
use App\Repository\AvisRepositery;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use App\Services\IVehiculeService;
use App\Repository\OffreRepository;
use App\Repository\MessageRepository;
use App\Repository\ServiceRepository;
use App\Repository\VehiculeRepository;
use App\Repository\CategorieRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\CompetenceRepository;
use App\Services\Implimentation\S_Service;
use App\Repository\Interfaces\TagInterface;
use App\Services\Implimentation\TagService;
use App\Repository\Interfaces\AvisInterface;
use App\Repository\Interfaces\RoleInterface;
use App\Repository\Interfaces\UserInterface;
use App\Services\Implimentation\RoleService;
use App\Services\Implimentation\UserService;
use App\Repository\Interfaces\OffreInterface;
use App\Services\Implimentation\OffreService;
use App\Repository\Interfaces\MessageInterface;
use App\Repository\Interfaces\ServiceInterface;
use App\Repository\Interfaces\VehiculeInterface;
use App\Services\Implimentation\MechanicService;
use App\Services\Implimentation\VehiculeService;
use App\Repository\Interfaces\CategorieInterface;
use App\Services\Implimentation\CategorieService;
use App\Repository\Interfaces\CompetenceInterface;
use App\Services\Implimentation\CompetenceService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IMechanic::class,MechanicService::class);
        $this->app->bind(ICompetence::class,CompetenceService::class);
        $this->app->bind(CompetenceInterface::class,CompetenceRepository::class);
        $this->app->bind(TagInterface::class,TagRepository::class);
        $this->app->bind(CategorieInterface::class,CategorieRepository::class);
        $this->app->bind(MessageInterface::class,MessageRepository::class);
        $this->app->bind(AvisInterface::class,AvisRepositery::class);
        $this->app->bind(ServiceInterface::class,ServiceRepository::class);
        $this->app->bind(VehiculeInterface::class,VehiculeRepository::class);
        $this->app->bind(IVehiculeService::class,VehiculeService::class);
        $this->app->bind(IService::class,S_Service::class);
        $this->app->bind(IRole::class,RoleService::class);
        $this->app->bind(IUser::class,UserService::class);
        $this->app->bind(RoleInterface::class,RoleRepository::class);
        $this->app->bind(UserInterface::class,UserRepository::class);
        $this->app->bind(ICategorie::class,CategorieService::class);
        $this->app->bind(ITag::class,TagService::class);
        $this->app->bind(IOffre::class,OffreService::class);
        $this->app->bind(OffreInterface::class,OffreRepository::class);






    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
