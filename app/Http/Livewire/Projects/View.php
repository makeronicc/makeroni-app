<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class View extends Component
{
    public $projects;
    public function render()
    {
        $this->projects = Project::all();
        return view('livewire.projects.view');
    }
}
