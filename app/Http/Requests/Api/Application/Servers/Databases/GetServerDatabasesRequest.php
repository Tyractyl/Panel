<?php

namespace Tyractyl\Http\Requests\Api\Application\Servers\Databases;

use Tyractyl\Services\Acl\Api\AdminAcl;
use Tyractyl\Http\Requests\Api\Application\ApplicationApiRequest;

class GetServerDatabasesRequest extends ApplicationApiRequest
{
    protected ?string $resource = AdminAcl::RESOURCE_SERVER_DATABASES;

    protected int $permission = AdminAcl::READ;
}
