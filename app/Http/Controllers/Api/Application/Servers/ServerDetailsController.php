<?php

namespace Tyractyl\Http\Controllers\Api\Application\Servers;

use Tyractyl\Models\Server;
use Tyractyl\Services\Servers\BuildModificationService;
use Tyractyl\Services\Servers\DetailsModificationService;
use Tyractyl\Transformers\Api\Application\ServerTransformer;
use Tyractyl\Http\Controllers\Api\Application\ApplicationApiController;
use Tyractyl\Http\Requests\Api\Application\Servers\UpdateServerDetailsRequest;
use Tyractyl\Http\Requests\Api\Application\Servers\UpdateServerBuildConfigurationRequest;

class ServerDetailsController extends ApplicationApiController
{
    /**
     * ServerDetailsController constructor.
     */
    public function __construct(
        private BuildModificationService $buildModificationService,
        private DetailsModificationService $detailsModificationService,
    ) {
        parent::__construct();
    }

    /**
     * Update the details for a specific server.
     *
     * @throws \Tyractyl\Exceptions\DisplayException
     * @throws \Tyractyl\Exceptions\Model\DataValidationException
     * @throws \Tyractyl\Exceptions\Repository\RecordNotFoundException
     */
    public function details(UpdateServerDetailsRequest $request, Server $server): array
    {
        $updated = $this->detailsModificationService->returnUpdatedModel()->handle(
            $server,
            $request->validated()
        );

        return $this->fractal->item($updated)
            ->transformWith($this->getTransformer(ServerTransformer::class))
            ->toArray();
    }

    /**
     * Update the build details for a specific server.
     *
     * @throws \Tyractyl\Exceptions\DisplayException
     * @throws \Tyractyl\Exceptions\Model\DataValidationException
     * @throws \Tyractyl\Exceptions\Repository\RecordNotFoundException
     */
    public function build(UpdateServerBuildConfigurationRequest $request, Server $server): array
    {
        $server = $this->buildModificationService->handle($server, $request->validated());

        return $this->fractal->item($server)
            ->transformWith($this->getTransformer(ServerTransformer::class))
            ->toArray();
    }
}
