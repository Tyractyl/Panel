<?php

namespace Tyractyl\Facades;

use Illuminate\Support\Facades\Facade;
use Tyractyl\Services\Activity\ActivityLogService;

class Activity extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ActivityLogService::class;
    }
}
