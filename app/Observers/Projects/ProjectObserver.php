<?php

namespace App\Observers\Projects;

use App\Models\Projects\Project;

class ProjectObserver
{
    public function creating(Project $project) {
        $project->headleader = auth()->id();
        $project->tariff_id = 1;
        $project->domain .= '.pomogite.me';
    }
}
