<?php

namespace Tyractyl\Http\Requests\Api\Client\Servers\Schedules;

use Tyractyl\Models\Permission;

class UpdateScheduleRequest extends StoreScheduleRequest
{
    public function permission(): string
    {
        return Permission::ACTION_SCHEDULE_UPDATE;
    }
}
