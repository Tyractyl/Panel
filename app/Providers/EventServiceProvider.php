<?php

namespace Tyractyl\Providers;

use Tyractyl\Models\User;
use Tyractyl\Models\Server;
use Tyractyl\Models\Subuser;
use Tyractyl\Models\EggVariable;
use Tyractyl\Observers\UserObserver;
use Tyractyl\Observers\ServerObserver;
use Tyractyl\Observers\SubuserObserver;
use Tyractyl\Observers\EggVariableObserver;
use Tyractyl\Listeners\Auth\AuthenticationListener;
use Tyractyl\Events\Server\Installed as ServerInstalledEvent;
use Tyractyl\Notifications\ServerInstalled as ServerInstalledNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     */
    protected $listen = [
        ServerInstalledEvent::class => [ServerInstalledNotification::class],
    ];

    protected $subscribe = [
        AuthenticationListener::class,
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        parent::boot();

        User::observe(UserObserver::class);
        Server::observe(ServerObserver::class);
        Subuser::observe(SubuserObserver::class);
        EggVariable::observe(EggVariableObserver::class);
    }
}
