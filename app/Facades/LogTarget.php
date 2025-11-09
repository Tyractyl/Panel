<?php

namespace Tyractyl\Facades;

use Illuminate\Support\Facades\Facade;
use Tyractyl\Services\Activity\ActivityLogTargetableService;

class LogTarget extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ActivityLogTargetableService::class;
    }
}
