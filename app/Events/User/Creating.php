<?php

namespace Tyractyl\Events\User;

use Tyractyl\Models\User;
use Tyractyl\Events\Event;
use Illuminate\Queue\SerializesModels;

class Creating extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public User $user)
    {
    }
}
