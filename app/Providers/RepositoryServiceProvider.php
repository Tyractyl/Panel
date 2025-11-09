<?php

namespace Tyractyl\Providers;

use Illuminate\Support\ServiceProvider;
use Tyractyl\Repositories\Eloquent\EggRepository;
use Tyractyl\Repositories\Eloquent\NestRepository;
use Tyractyl\Repositories\Eloquent\NodeRepository;
use Tyractyl\Repositories\Eloquent\TaskRepository;
use Tyractyl\Repositories\Eloquent\UserRepository;
use Tyractyl\Repositories\Eloquent\ApiKeyRepository;
use Tyractyl\Repositories\Eloquent\ServerRepository;
use Tyractyl\Repositories\Eloquent\SessionRepository;
use Tyractyl\Repositories\Eloquent\SubuserRepository;
use Tyractyl\Repositories\Eloquent\DatabaseRepository;
use Tyractyl\Repositories\Eloquent\LocationRepository;
use Tyractyl\Repositories\Eloquent\ScheduleRepository;
use Tyractyl\Repositories\Eloquent\SettingsRepository;
use Tyractyl\Repositories\Eloquent\AllocationRepository;
use Tyractyl\Contracts\Repository\EggRepositoryInterface;
use Tyractyl\Repositories\Eloquent\EggVariableRepository;
use Tyractyl\Contracts\Repository\NestRepositoryInterface;
use Tyractyl\Contracts\Repository\NodeRepositoryInterface;
use Tyractyl\Contracts\Repository\TaskRepositoryInterface;
use Tyractyl\Contracts\Repository\UserRepositoryInterface;
use Tyractyl\Repositories\Eloquent\DatabaseHostRepository;
use Tyractyl\Contracts\Repository\ApiKeyRepositoryInterface;
use Tyractyl\Contracts\Repository\ServerRepositoryInterface;
use Tyractyl\Repositories\Eloquent\ServerVariableRepository;
use Tyractyl\Contracts\Repository\SessionRepositoryInterface;
use Tyractyl\Contracts\Repository\SubuserRepositoryInterface;
use Tyractyl\Contracts\Repository\DatabaseRepositoryInterface;
use Tyractyl\Contracts\Repository\LocationRepositoryInterface;
use Tyractyl\Contracts\Repository\ScheduleRepositoryInterface;
use Tyractyl\Contracts\Repository\SettingsRepositoryInterface;
use Tyractyl\Contracts\Repository\AllocationRepositoryInterface;
use Tyractyl\Contracts\Repository\EggVariableRepositoryInterface;
use Tyractyl\Contracts\Repository\DatabaseHostRepositoryInterface;
use Tyractyl\Contracts\Repository\ServerVariableRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register all the repository bindings.
     */
    public function register(): void
    {
        // Eloquent Repositories
        $this->app->bind(AllocationRepositoryInterface::class, AllocationRepository::class);
        $this->app->bind(ApiKeyRepositoryInterface::class, ApiKeyRepository::class);
        $this->app->bind(DatabaseRepositoryInterface::class, DatabaseRepository::class);
        $this->app->bind(DatabaseHostRepositoryInterface::class, DatabaseHostRepository::class);
        $this->app->bind(EggRepositoryInterface::class, EggRepository::class);
        $this->app->bind(EggVariableRepositoryInterface::class, EggVariableRepository::class);
        $this->app->bind(LocationRepositoryInterface::class, LocationRepository::class);
        $this->app->bind(NestRepositoryInterface::class, NestRepository::class);
        $this->app->bind(NodeRepositoryInterface::class, NodeRepository::class);
        $this->app->bind(ScheduleRepositoryInterface::class, ScheduleRepository::class);
        $this->app->bind(ServerRepositoryInterface::class, ServerRepository::class);
        $this->app->bind(ServerVariableRepositoryInterface::class, ServerVariableRepository::class);
        $this->app->bind(SessionRepositoryInterface::class, SessionRepository::class);
        $this->app->bind(SettingsRepositoryInterface::class, SettingsRepository::class);
        $this->app->bind(SubuserRepositoryInterface::class, SubuserRepository::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
