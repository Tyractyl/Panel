<?php

namespace Tyractyl\Http\Requests\Api\Client\Servers\Schedules;

use Tyractyl\Models\Permission;

class DeleteScheduleRequest extends ViewScheduleRequest
{
    public function permission(): string
    {
        return Permission::ACTION_SCHEDULE_DELETE;
    }
}
