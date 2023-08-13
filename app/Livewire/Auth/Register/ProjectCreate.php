<?php

namespace App\Livewire\Auth\Register;

use App\Livewire\Forms\Auth\ProjectCreateForm;
use App\Livewire\Traits\GenerateUserPassword;
use App\Models\Projects\Project;
use App\Models\Projects\ProjectDomain;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProjectCreate extends Component
{
    use GenerateUserPassword;

    public ProjectCreateForm $form;

    public function save()
    {
        $data = $this->form->validate();

        DB::transaction(function() use ($data) {
            $project = Project::create($data);
            $domain = ProjectDomain::create([
                'project_id' => $project->id,
                'domain' => $data['domain'].'.'.config('app.basedomain'),
            ]);
        });

        //$this->redirect(route('projects'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register.project-create');
    }
}
