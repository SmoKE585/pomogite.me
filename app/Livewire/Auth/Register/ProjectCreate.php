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

        $domain = null;

        DB::transaction(function() use ($data, &$domain) {
            $project = Project::create($data);
            $domain = ProjectDomain::create([
                'project_id' => $project->id,
                'domain' => $data['domain'].'.'.config('app.basedomain'),
            ]);
            $project->domain_id = $domain->id;
            $project->save();
        });

        $this->redirect('http://'.$domain->domain);
    }

    public function render()
    {
        return view('livewire.auth.register.project-create');
    }
}
