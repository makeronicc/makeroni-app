<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Carbon\Carbon;

class CreateForm extends Component
{
    public $name, $description, $link, $start_date;
    public $type = 'software';
    
    protected $rules = [
        'name' => 'required|min:5',
        'description' => 'required',
        'type' => 'required',
        'link' => 'required',
        'start_date' => 'required|date|before:tomorrow',
    ];
    public function render()
    {
        $this->start_date = Carbon::now()->format('Y-m-d');
        return view('livewire.projects.create-form');
    }

    public function createProject()
    {
        $this->validate();

        Project::create([
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'link' => $this->link,
            'start_date' => $this->start_date,
            'status' => 'new',
            'user_id' => auth()->user()->id,
        ]);

        $this->reset();

        session()->flash('message', 'Project created successfully.');

        return redirect()->route('projects');
    }
}
