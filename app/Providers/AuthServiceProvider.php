<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //creamos las gates para el usuario gerente y administrador
        Gate::define('Gerente-Administrador', function ($user){
            if($user->tipo_usuario_id == 1 || $user->tipo_usuario_id == 3){
                return true;
            }
            return false;
        });

        Gate::define('Gerente', function ($user){
            if($user->tipo_usuario_id == 3){
                return true;
            }
            return false;
        });
    }
}
