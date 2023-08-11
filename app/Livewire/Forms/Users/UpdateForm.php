<?php

namespace App\Livewire\Forms\Users;

use App\Models\Users\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Form;

class UpdateForm extends Form
{
    #[Rule('required|min:5')]
    public string $name = '';

    #[Rule('required|email:rfc,dns')]
    public string $email = '';

    #[Rule('nullable|min:6|confirmed')]
    public string $password = '';

    #[Rule('required_with:password|min:6')]
    public string $password_confirmation = '';

    #[Rule('nullable|boolean')]
    public string $active = '';

    public function validate()
    {
        $validate = parent::validate();

        if($this->password) {
            $this->password = Hash::make($this->password);
        }

        return $validate; // TODO: Change the autogenerated stub
    }

    public function set(User $user) {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->active = $user->active;
    }
}