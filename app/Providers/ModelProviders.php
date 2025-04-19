<?php

namespace App\Providers;

use App\Models\Avis;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class ModelProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    //     $this->app->bind(Model::class,User::class);
    //     $this->app->bind(Model::class,Avis::class);
    //  $this->app->bind(M_IUser::class,Model::class);

       
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
