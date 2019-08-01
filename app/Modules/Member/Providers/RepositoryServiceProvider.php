<?php

namespace App\Modules\Member\Providers;

use Illuminate\Support\ServiceProvider;

use App\Modules\Member\Repositories\MemberRepository;
use App\Modules\Member\Repositories\MemberRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(MemberRepositoryInterface::class, MemberRepository::class);
        //:end-bindings:
    }
}
