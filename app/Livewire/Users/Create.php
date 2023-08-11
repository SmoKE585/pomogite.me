<?php

namespace App\Livewire\Users;

use App\Livewire\Forms\Users\UpdateForm;
use App\Models\Users\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    public static function modalMaxWidth(): string
    {
        return '3xl';
    }

    public UpdateForm $form;

    public function save() {
        $this->form->validate();

        $this->form->all()['password'] = Hash::make($this->form->all()['password']);

        User::create($this->form->all());

        $this->dispatch('refresh');

        $this->closeModal();
    }

    public function generatePassword() {
        $pass = Str::random(8);
        $this->form->password = $pass;
        $this->form->password_confirmation = $pass;
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}