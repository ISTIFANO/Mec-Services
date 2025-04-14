<?php

namespace App\Providers;

use App\Models\Message;
use App\Repository\BookingRepository;
use App\Repository\TagRepository;
use App\Repository\MessageRepository;
use App\Repository\CategorieRepository;
use App\Repository\Interfaces\BookingInterface;
use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\TagInterface;
use App\Repository\Interfaces\ReviewInterface;
use App\Repository\Interfaces\MessageInterface;
use App\Repository\Interfaces\CategorieInterface;
use App\Repository\Interfaces\ServiceInterface;
use App\Repository\Interfaces\VehiculeInterface;
use App\Repository\ServiceRepository;
use App\Repository\VehiculeRepository;

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
        $this->app->bind(ReviewInterface::class,ReviewInterface::class);
        $this->app->bind(ServiceRepository::class,ServiceInterface::class);
        $this->app->bind(VehiculeInterface::class,VehiculeRepository::class);
        


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
