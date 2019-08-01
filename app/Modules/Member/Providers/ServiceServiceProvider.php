<?php

namespace App\Modules\Member\Providers;


use Illuminate\Support\ServiceProvider;


use App\Modules\Member\Services\MemberService;
use App\Modules\Member\Services\MemberServiceInterface;

class ServiceServiceProvider extends ServiceProvider
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
        $this->app->bind(MemberServiceInterface::class, MemberService::class);
        //:end-bindings:
    }
}
