<?php

namespace Tyractyl\Repositories\Eloquent;

use Tyractyl\Models\RecoveryToken;

class RecoveryTokenRepository extends EloquentRepository
{
    public function model(): string
    {
        return RecoveryToken::class;
    }
}
