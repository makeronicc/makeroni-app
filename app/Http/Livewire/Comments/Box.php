<?php

namespace App\Http\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

class Box extends Component
{
    public $comment, $commentable;
    public $mood = 'none', $moodMenu = false;
    public function render()
    {
        return view('livewire.comments.box');
    }

    public function postComment()
    {
        $this->commentable->comments()->create([
            'user_id' => auth()->id(),
            'body' => $this->comment,
            'mood' => $this->mood
        ]);
        
        $this->comment = '';
        $this->mood = 'none';

        session()->flash('message', 'Comment posted successfully.');
    }

    public function toggleMoodMenu()
    {
        $this->moodMenu = !$this->moodMenu;
    }
}
