<?php

namespace App\Livewire\Auth\Register;

use App\Livewire\Forms\Auth\AccountCreateForm;
use App\Livewire\Traits\GenerateUserPassword;
use App\Models\Users\User;
use Livewire\Component;

class AccountCreate extends Component
{
    use GenerateUserPassword;

    public AccountCreateForm $form;

    public function save() {
        $data = $this->form->validate();

        $user = User::create($data);

        \Auth::login($user);

        $this->redirect(route('start.projectcreate'), navigate: true);
    }

    public function generatePassword()
    {
        $this->setRandomPassword();
    }

    public function render()
    {
        return view('livewire.auth.register.account-create');
    }
}
