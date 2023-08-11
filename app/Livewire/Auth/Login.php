<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required|email:rfc,dns')]
    public string $email = '';
    #[Rule('required|min:8')]
    public string $password = '';

    public bool $isError = false;

    public function login()
    {
        $data = $this->validate();

        if(Auth::attempt($data)) {
            return $this->redirect('/users', navigate: true);
        } else {
            $this->password = '';
            $this->isError = true;
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
