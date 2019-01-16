<?php

namespace App\Domains;

use App\User as UserModel;
class User
{
    /**
     * Retrieves all registered users.
     * @return array
     */
    public function allUsers(): array
    {
        return UserModel::all()->toArray();
    }

    /**
     * Retrieves user details given userId.
     * @param int $userId
     * @return array
     */
    public function specificUser(int $userId): array
    {
        $userDetails = UserModel::find($userId)->first();
        if ($userDetails !== null) {
            return $userDetails->toArray();
        }
        return [];
    }
}
