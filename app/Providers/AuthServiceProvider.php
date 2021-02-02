<?php

namespace App\Providers;

use App\Models\User;
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

        Gate::define('supervisor', function (User $user) {
            return $user->role == 1;
        });
    
        Gate::define('keuangan', function (User $user) {
            return $user->role == 2;
        });

        Gate::define('accounting', function (User $user) {
            return $user->role == 0 | 3;
        });

        Gate::define('kasir', function (User $user) {
            return $user->role == 0 &&  4;
        });

        Gate::define('gudang', function (User $user) {
            return $user->role == 0 &&  5;
        });

        Gate::define('produksi', function (User $user) {
            return $user->role == 0 && 6;
        });

        Gate::define('marketing', function (User $user) {
            return $user->role == 0 &&  7;
        });
    }
}
