<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project: ') . $project->name }}
        </h2>
    </x-slot>

    {{-- Show details for project --}}
    <x-card>
        @livewire('projects.card', ['project' => $project])
    </x-card>
</x-app-layout>
