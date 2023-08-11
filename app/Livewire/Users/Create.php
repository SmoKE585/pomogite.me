<?php

namespace App\Livewire\Users;

use App\Livewire\Forms\Users\CreateForm;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    public static function modalMaxWidth(): string
    {
        return '3xl';
    }

    public CreateForm $form;

    public function save() {
        //dd($this->form->all());
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
