<?php

namespace App\Providers;

use App\Aluno;
use App\Policies\AlunoPolicy;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Aluno::class => AlunoPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Gate::define('aluno_update', function(User $user, Aluno $aluno) {
//            if ($aluno->id == 1) {
//                return true;
//            }
//            return false;
//        });

//        Gate::before(function(User $user) {
//            $user->isAdmin();
//        });
    }
}
