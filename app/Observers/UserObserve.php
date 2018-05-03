<?php

namespace App\Observers;

use App\User;

class UserObserve
{
    public function created(User $user)
    {
        $user->profile()->create([]);
    }
}