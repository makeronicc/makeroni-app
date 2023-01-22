<div class="pt-4" wire:poll.750ms>
    <h3>Comments ({{$comments->count()}})</h3>
    <div class="pt-4">
        @foreach ($comments as $comment)
            <div class="bg-gray-100 border border-gray-300 p-4 rounded-lg mb-4">
                <p class="font-bold">{{ $comment->user->name }}</p>
                <p>{{ $comment->body }}</p>
            </div>
        @endforeach
    </div>
    @livewire('comments.box', [
        'commentable' => $commentable
    ])
</div>