<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $project;
    public function index()
    {
        return view('projects.index');
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show($project)
    {
        $this->project = Project::findOrFail($project);
        return view('projects.show', [
            'project' => $this->project
        ]);
    }
}
