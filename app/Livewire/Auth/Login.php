<?php

namespace App\Livewire\Auth;

use App\Exceptions\Auth\LoginFailed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required|email:rfc,dns')]
    public string $email = '';
    #[Rule('required|min:8')]
    public string $password = '';

    public bool $isError = false;

    public function mount() {
        //dd(\request()->domain);
    }

    public function login() : void
    {
        $data = $this->validate();

        if(Auth::attempt($data)) {
            $this->successAuth();
        }

        $this->password = '';
        $this->isError = true;
    }

    public function successAuth() : void
    {
        $this->redirect(route('projects'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
