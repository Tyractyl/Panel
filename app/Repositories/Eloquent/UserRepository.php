<?php

namespace Tyractyl\Repositories\Eloquent;

use Tyractyl\Models\User;
use Tyractyl\Contracts\Repository\UserRepositoryInterface;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{
    /**
     * Return the model backing this repository.
     */
    public function model(): string
    {
        return User::class;
    }
}
