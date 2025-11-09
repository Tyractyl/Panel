<?php

namespace Tyractyl\Http\Controllers\Api\Application\Servers;

use Tyractyl\Models\User;
use Tyractyl\Models\Server;
use Tyractyl\Services\Servers\StartupModificationService;
use Tyractyl\Transformers\Api\Application\ServerTransformer;
use Tyractyl\Http\Controllers\Api\Application\ApplicationApiController;
use Tyractyl\Http\Requests\Api\Application\Servers\UpdateServerStartupRequest;

class StartupController extends ApplicationApiController
{
    /**
     * StartupController constructor.
     */
    public function __construct(private StartupModificationService $modificationService)
    {
        parent::__construct();
    }

    /**
     * Update the startup and environment settings for a specific server.
     *
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Tyractyl\Exceptions\Http\Connection\DaemonConnectionException
     * @throws \Tyractyl\Exceptions\Model\DataValidationException
     * @throws \Tyractyl\Exceptions\Repository\RecordNotFoundException
     */
    public function index(UpdateServerStartupRequest $request, Server $server): array
    {
        $server = $this->modificationService
            ->setUserLevel(User::USER_LEVEL_ADMIN)
            ->handle($server, $request->validated());

        return $this->fractal->item($server)
            ->transformWith($this->getTransformer(ServerTransformer::class))
            ->toArray();
    }
}
