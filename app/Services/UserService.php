<?php

namespace App\Services;

use App\Domains\User as UserDomain;

class UserService
{
    /**
     * @var UserDomain
     */
    private $userDomain;

    /**
     * UserService constructor.
     * @param UserDomain $userDomain
     */
    public function __construct(UserDomain $userDomain)
    {
        $this->userDomain = $userDomain;
    }

    /**
     * Fetch all users.
     * @return array
     */
    public function getAllUsers(): array
    {
        return $this->userDomain->allUsers();
    }

    /**
     * Fetch specific user by id.
     * @param int $userId
     * @return array
     */
    public function getUserById(int $userId): array
    {
        return $this->userDomain->specificUser($userId);
    }
}
