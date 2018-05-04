<?php

namespace App\Observers;

use App\User;
use App\UserProfile;

class UserObserve
{
    public function created(User $user)
    {
        $user->profile()->create([]);
    }
}