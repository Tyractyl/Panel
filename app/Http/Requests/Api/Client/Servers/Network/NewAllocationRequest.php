<?php

namespace Tyractyl\Http\Requests\Api\Client\Servers\Network;

use Tyractyl\Models\Permission;
use Tyractyl\Http\Requests\Api\Client\ClientApiRequest;

class NewAllocationRequest extends ClientApiRequest
{
    public function permission(): string
    {
        return Permission::ACTION_ALLOCATION_CREATE;
    }
}
