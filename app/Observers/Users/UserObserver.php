<?php

namespace App\Observers\Users;

use App\Models\Users\User;
use App\Notifications\Users\AccountCreated;

class UserObserver
{
    public function created(User $user): void
    {
        $user->notify(new AccountCreated());
    }
}
