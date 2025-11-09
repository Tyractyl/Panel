<?php

namespace Tyractyl\Http\Requests\Api\Application\Users;

use Tyractyl\Services\Acl\Api\AdminAcl;
use Tyractyl\Http\Requests\Api\Application\ApplicationApiRequest;

class DeleteUserRequest extends ApplicationApiRequest
{
    protected ?string $resource = AdminAcl::RESOURCE_USERS;

    protected int $permission = AdminAcl::WRITE;
}
