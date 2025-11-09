<?php

namespace Tyractyl\Http\Requests\Api\Application\Nodes;

use Tyractyl\Services\Acl\Api\AdminAcl;
use Tyractyl\Http\Requests\Api\Application\ApplicationApiRequest;

class GetNodesRequest extends ApplicationApiRequest
{
    protected ?string $resource = AdminAcl::RESOURCE_NODES;

    protected int $permission = AdminAcl::READ;
}
