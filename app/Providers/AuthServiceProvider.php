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

        $user = \Auth::user();


        // Auth gates for: Admin Access
        Gate::define('admin_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('admin_agent_access', function ($user) {
            return in_array($user->role_id, [1,2]);
        });
        // Auth gates for: Agent Access
        Gate::define('agent_access', function ($user) {
            return in_array($user->role_id, [2]);
        });
        // Auth gates for: User Access

        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [3]);
        });

        //
    }
}
