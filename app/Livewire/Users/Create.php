<?php

namespace App\Livewire\Users;

use App\Livewire\Forms\Users\CreateForm;
use App\Livewire\Forms\Users\UpdateForm;
use App\Livewire\Traits\GenerateUserPassword;
use App\Models\Users\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    use GenerateUserPassword;

    public static function modalMaxWidth(): string
    {
        return '3xl';
    }

    public CreateForm $form;

    public function save() {
        $this->form->validate();

        $this->form->all()['password'] = Hash::make($this->form->all()['password']);

        User::create($this->form->all());

        $this->dispatch('refresh');

        $this->closeModal();
    }

    public function generatePassword()
    {
        $this->setRandomPassword();
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
