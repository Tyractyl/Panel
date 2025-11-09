<?php

namespace Tyractyl\Providers;

use Laravel\Sanctum\Sanctum;
use Tyractyl\Models\ApiKey;
use Tyractyl\Models\Server;
use Tyractyl\Policies\ServerPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     */
    protected $policies = [
        Server::class => ServerPolicy::class,
    ];

    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(ApiKey::class);
    }
}
