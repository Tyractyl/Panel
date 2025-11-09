<?php

namespace Tyractyl\Repositories\Eloquent;

use Tyractyl\Models\ServerVariable;
use Tyractyl\Contracts\Repository\ServerVariableRepositoryInterface;

class ServerVariableRepository extends EloquentRepository implements ServerVariableRepositoryInterface
{
    /**
     * Return the model backing this repository.
     */
    public function model(): string
    {
        return ServerVariable::class;
    }
}
