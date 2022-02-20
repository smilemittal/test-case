<?php

namespace App\Domain\Core\Repositories;

use App\Domain\Core\Models\User;

class UserRepository
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function createUser(array $data)
    {
        return $this->user->create($data);
    }
}
