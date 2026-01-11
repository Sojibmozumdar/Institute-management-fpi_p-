<?php

namespace App;

enum UserType: string
{
    case ADMIN = 'admin';
    case USER = 'user';

    /**
     * Optional: Helper method to get a human-readable label
     */
    public function label(): string
    {
        return match($this) {
            self::ADMIN => 'Administrator',
            self::USER => 'Student',
        };
    }
}
