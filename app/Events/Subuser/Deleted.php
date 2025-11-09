<?php

namespace Tyractyl\Events\Subuser;

use Tyractyl\Events\Event;
use Tyractyl\Models\Subuser;
use Illuminate\Queue\SerializesModels;

class Deleted extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Subuser $subuser)
    {
    }
}
