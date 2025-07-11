<?php
namespace App\Modules\Login\Models\Hydrators;

use App\Modules\Login\Models\User;

class UserHydrator {
    public static function hydrate(array $row): User {
        $user = new User();
        $user->setId($row['id']);
        $user->setFirstName($row['first_name']);
        $user->setLastName($row['last_name']);
        $user->setEmail($row['email']);
        $user->setUsername($row['username']);
        $user->setPassword($row['password_hash']);
        $user->setRoleId($row['role_id']);
        $user->setCreatedAt($row['created_at']);
        return $user;
    }
}