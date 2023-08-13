<?php

namespace App\Observers\Projects;

use App\Models\Projects\Project;
use App\Models\Projects\ProjectDomain;
use App\Models\Projects\ProjectMember;

class ProjectObserver
{
    public function created(Project $project) {
        //Добавляем участника в проект
        ProjectMember::create([
            'project_id' => $project->id,
            'user_id' => auth()->id(),
            'owner' => true,
            'total' => 1,
        ]);
    }
}
