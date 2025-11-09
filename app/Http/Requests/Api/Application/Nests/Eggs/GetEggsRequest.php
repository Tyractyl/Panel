<?php

namespace Tyractyl\Http\Requests\Api\Application\Nests\Eggs;

use Tyractyl\Services\Acl\Api\AdminAcl;
use Tyractyl\Http\Requests\Api\Application\ApplicationApiRequest;

class GetEggsRequest extends ApplicationApiRequest
{
    protected ?string $resource = AdminAcl::RESOURCE_EGGS;

    protected int $permission = AdminAcl::READ;
}
