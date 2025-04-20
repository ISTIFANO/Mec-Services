<?php

namespace App\Providers;

use App\Models\User;
use App\Repository\AvisRepositery;
use App\Services\IService;
use App\Repository\TagRepository;
use App\Repository\MessageRepository;
use App\Repository\ServiceRepository;
use App\Repository\VehiculeRepository;
use App\Repository\CategorieRepository;
use App\Repository\Interfaces\AvisInterface;
use Illuminate\Support\ServiceProvider;
use App\Services\Implimentation\S_Service;
use App\Repository\Interfaces\TagInterface;
use App\Repository\Interfaces\MessageInterface;
use App\Repository\Interfaces\ServiceInterface;
use App\Repository\Interfaces\VehiculeInterface;
use App\Repository\Interfaces\CategorieInterface;
use App\Repository\Interfaces\RoleInterface;
use App\Repository\Interfaces\UserInterface;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use App\Services\ICategorie;
use App\Services\Implimentation\CategorieService;
use App\Services\Implimentation\RoleService;
use App\Services\Implimentation\UserService;
use App\Services\IRole;
use App\Services\IUser;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TagInterface::class,TagRepository::class);
        $this->app->bind(CategorieInterface::class,CategorieRepository::class);
        $this->app->bind(MessageInterface::class,MessageRepository::class);
        $this->app->bind(AvisInterface::class,AvisRepositery::class);
        $this->app->bind(ServiceInterface::class,ServiceRepository::class);
        $this->app->bind(VehiculeInterface::class,VehiculeRepository::class);
        $this->app->bind(IService::class,S_Service::class);
        $this->app->bind(IRole::class,RoleService::class);
        $this->app->bind(IUser::class,UserService::class);
        $this->app->bind(RoleInterface::class,RoleRepository::class);
        $this->app->bind(UserInterface::class,UserRepository::class);
        $this->app->bind(ICategorie::class,CategorieService::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
