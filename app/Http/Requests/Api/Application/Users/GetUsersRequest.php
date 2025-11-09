<?php

namespace Tyractyl\Http\Requests\Api\Application\Users;

use Tyractyl\Services\Acl\Api\AdminAcl as Acl;
use Tyractyl\Http\Requests\Api\Application\ApplicationApiRequest;

class GetUsersRequest extends ApplicationApiRequest
{
    protected ?string $resource = Acl::RESOURCE_USERS;

    protected int $permission = Acl::READ;
}
