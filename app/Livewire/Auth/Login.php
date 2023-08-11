<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required|email:rfc,dns')]
    public string $email;
    #[Rule('required|min:8')]
    public string $password;

    public function login() {

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
