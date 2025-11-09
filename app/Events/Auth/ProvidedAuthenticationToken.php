<?php

namespace Tyractyl\Events\Auth;

use Tyractyl\Models\User;
use Tyractyl\Events\Event;

class ProvidedAuthenticationToken extends Event
{
    public function __construct(public User $user, public bool $recovery = false)
    {
    }
}
