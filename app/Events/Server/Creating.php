<?php

namespace Tyractyl\Events\Server;

use Tyractyl\Events\Event;
use Tyractyl\Models\Server;
use Illuminate\Queue\SerializesModels;

class Creating extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Server $server)
    {
    }
}
