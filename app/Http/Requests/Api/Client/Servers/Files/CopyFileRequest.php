<?php

namespace Tyractyl\Http\Requests\Api\Client\Servers\Files;

use Tyractyl\Models\Permission;
use Tyractyl\Contracts\Http\ClientPermissionsRequest;
use Tyractyl\Http\Requests\Api\Client\ClientApiRequest;

class CopyFileRequest extends ClientApiRequest implements ClientPermissionsRequest
{
    public function permission(): string
    {
        return Permission::ACTION_FILE_CREATE;
    }

    public function rules(): array
    {
        return [
            'location' => 'required|string',
        ];
    }
}
