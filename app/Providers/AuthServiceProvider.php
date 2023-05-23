<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-admin', function ($user) {
            // Verifique se o usuário tem o nível de acesso "admin"
            return $user->hasRole('admin');
        });

        Gate::define('access-registrador', function ($user) {
            // Verifique se o usuário tem o nível de acesso "registrador"
            return $user->hasRole('registrador');
        });

        Gate::define('access-gerenciador', function ($user) {
            // Verifique se o usuário tem o nível de acesso "gerenciador"
            return $user->hasRole('gerenciador');
        });
    }
}