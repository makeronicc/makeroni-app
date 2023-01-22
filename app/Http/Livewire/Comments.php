<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments, $commentable;
    public function render()
    {
        return view('livewire.comments');
    }
}
