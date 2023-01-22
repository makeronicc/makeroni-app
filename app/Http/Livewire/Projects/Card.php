<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Card extends Component
{
    public $project, $edit = false;
    public function render()
    {
        return view('livewire.projects.card');
    }
}
