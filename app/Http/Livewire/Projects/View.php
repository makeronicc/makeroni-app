<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class View extends Component
{
    public $projects, $view;
    public function render()
    {
        if ($this->view == 'all') {
            $this->projects = Project::all();
        } elseif ($this->view == 'personal') {
            $this->projects = Project::where('user_id', auth()->user()->id)->get();
        } elseif ($this->view == 'member') {
            $this->projects = [];
        } elseif ($this->view == 'watched') {
            $this->projects = [];
        } elseif ($this->view == 'archived') {
            $this->projects = [];
        } elseif ($this->view == 'deleted') {
            $this->projects = [];
        } elseif ($this->view == 'other') {
            $this->projects = [];
        }
        
        return view('livewire.projects.view');
    }
}
