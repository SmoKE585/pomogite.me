<?php


namespace App\Livewire\Traits;


use Illuminate\Support\Str;

trait GenerateUserPassword
{
    public function setRandomPassword()
    {
        $pass = Str::random(8);
        $this->form->password = $pass;
        $this->form->password_confirmation = $pass;
    }
}
