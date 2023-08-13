<?php

namespace App\Livewire\Forms\Auth;

use Livewire\Attributes\Rule;
use Livewire\Form;

class AccountCreateForm extends Form
{
    #[Rule('required|min:5')]
    public string $name = '';

    #[Rule('required|email:rfc,dns|unique:users,email')]
    public string $email = '';

    #[Rule('required|min:6|confirmed')]
    public string $password = '';

    #[Rule('required|min:6')]
    public string $password_confirmation = '';
}
