<?php

namespace Tyractyl\Http\Requests\Api\Client\Servers\Files;

use Tyractyl\Models\Permission;
use Tyractyl\Http\Requests\Api\Client\ClientApiRequest;

class UploadFileRequest extends ClientApiRequest
{
    public function permission(): string
    {
        return Permission::ACTION_FILE_CREATE;
    }
}
