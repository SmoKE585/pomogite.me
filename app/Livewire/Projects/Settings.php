<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Features\SupportValidation\Rule;

class Settings extends Component
{
    use WithFileUploads;

    #[Rule('image|max:300')] // 1MB Max
    public $logo;

    public function render()
    {
        return view('livewire.projects.settings');
    }
}
