<?php

namespace App\Providers;

use App\Models\Post;
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
    /**
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // For Admin
        Gate::before(function (User $user){
            if ($user->is_admin = true){
                return true;
            }
        });
//            Gate::define('approve', function (User $user, Post $post){
//                return $post->user()-is($user);
//            });

    }
}
