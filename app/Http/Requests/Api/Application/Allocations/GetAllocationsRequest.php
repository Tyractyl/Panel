<?php

namespace Tyractyl\Http\Requests\Api\Application\Allocations;

use Tyractyl\Services\Acl\Api\AdminAcl;
use Tyractyl\Http\Requests\Api\Application\ApplicationApiRequest;

class GetAllocationsRequest extends ApplicationApiRequest
{
    protected ?string $resource = AdminAcl::RESOURCE_ALLOCATIONS;

    protected int $permission = AdminAcl::READ;
}
