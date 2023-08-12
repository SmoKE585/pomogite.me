<?php

namespace App\Livewire\Auth\Register;

use App\Livewire\Forms\Auth\AccountCreateForm;
use App\Livewire\Forms\Auth\ProjectCreateForm;
use App\Livewire\Traits\GenerateUserPassword;
use App\Models\Projects\Project;
use Livewire\Component;

class ProjectCreate extends Component
{
    use GenerateUserPassword;

    public ProjectCreateForm $form;

    public function save() {
        $data = $this->form->validate();

        $project = Project::create($data);
    }

    public function render()
    {
        return view('livewire.auth.register.project-create');
    }
}
