<?php

namespace App\Livewire\Dashboard;

use App\Models\Projects\Project;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
