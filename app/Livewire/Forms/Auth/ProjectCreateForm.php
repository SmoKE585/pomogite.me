<?php

namespace App\Livewire\Forms\Auth;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ProjectCreateForm extends Form
{
    #[Rule('required|min:3')]
    public string $name = '';

    #[Rule('required|min:3|domain_is_free')]
    public string $domain = '';
}
