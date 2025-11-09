<?php

namespace Tyractyl\Http\Controllers\Api\Application\Nodes;

use Tyractyl\Models\Node;
use Illuminate\Http\JsonResponse;
use Tyractyl\Http\Requests\Api\Application\Nodes\GetNodeRequest;
use Tyractyl\Http\Controllers\Api\Application\ApplicationApiController;

class NodeConfigurationController extends ApplicationApiController
{
    /**
     * Returns the configuration information for a node. This allows for automated deployments
     * to remote machines so long as an API key is provided to the machine to make the request
     * with, and the node is known.
     */
    public function __invoke(GetNodeRequest $request, Node $node): JsonResponse
    {
        return new JsonResponse($node->getConfiguration());
    }
}
