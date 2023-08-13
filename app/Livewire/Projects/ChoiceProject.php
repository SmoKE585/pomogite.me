<?php

namespace App\Livewire\Projects;

use App\Models\Projects\Project;
use Livewire\Component;

class ChoiceProject extends Component
{
    public Project $projects;

    public function mount() {
        dd(request());
        //$this->projects =
    }

    public function render()
    {
        return view('livewire.projects.choice-project');
    }
}
