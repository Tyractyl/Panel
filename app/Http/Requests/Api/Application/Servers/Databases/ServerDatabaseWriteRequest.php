<?php

namespace Tyractyl\Http\Requests\Api\Application\Servers\Databases;

use Tyractyl\Services\Acl\Api\AdminAcl;

class ServerDatabaseWriteRequest extends GetServerDatabasesRequest
{
    protected int $permission = AdminAcl::WRITE;
}
