<?php

namespace Tyractyl\Http\Requests\Api\Client\Servers\Databases;

use Tyractyl\Models\Permission;
use Tyractyl\Contracts\Http\ClientPermissionsRequest;
use Tyractyl\Http\Requests\Api\Client\ClientApiRequest;

class DeleteDatabaseRequest extends ClientApiRequest implements ClientPermissionsRequest
{
    public function permission(): string
    {
        return Permission::ACTION_DATABASE_DELETE;
    }
}
