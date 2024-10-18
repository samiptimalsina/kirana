<?php

namespace App\Enum;

enum Role: int
{
    case USER = 0;
    case ADMIN = 1;

    /**
     * Get the name of the role.
     *
     * @param  int  $role
     * @return string
     */
    public static function getName(int $role): string
    {
        return match ($role) {
            self::ADMIN->value => 'Admin',
            self::USER->value => 'User',
            default => 'Unknown',
        };
    }
}
