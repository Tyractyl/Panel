<?php

namespace Tyractyl\Exceptions\Service\Location;

use Illuminate\Http\Response;
use Tyractyl\Exceptions\DisplayException;

class HasActiveNodesException extends DisplayException
{
    public function getStatusCode(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }
}
