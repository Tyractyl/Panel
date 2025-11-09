<?php

namespace Tyractyl\Http\Requests\Api\Client\Servers\Subusers;

use Tyractyl\Models\Permission;

class DeleteSubuserRequest extends SubuserRequest
{
    public function permission(): string
    {
        return Permission::ACTION_USER_DELETE;
    }
}
