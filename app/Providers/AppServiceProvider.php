<?php

namespace App\Providers;


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
        $this->app->bind(ServiceRepository::class,ServiceInterface::class);
        $this->app->bind(VehiculeInterface::class,VehiculeRepository::class);
        $this->app->bind(IService::class,S_Service::class);

        


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
