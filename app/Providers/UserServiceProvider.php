<?php

namespace App\Providers;

use App\Services\Impl\UserServiceImpl;
use App\Services\UserServiceInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        UserServiceInterface::class => UserServiceImpl::class
    ];

    public function provides(): array
    {
        return [UserServiceInterface::class];
    }

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
        //
    }
}
    
