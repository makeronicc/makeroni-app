<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Projects</h1>
                {{-- <p class="mt-2 text-sm text-gray-700">Your team is on the <strong class="font-semibold text-gray-900">Startup</strong> plan. The next payment of $80 will be due on August 4, 2022.</p> --}}
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a type="button"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                    href="/projects/create">Create Project</a>
            </div>
        </div>
        @livewire('projects.view', ['view' => 'personal'])
        @livewire('projects.view', ['view' => 'member'])
        @livewire('projects.view', ['view' => 'watched'])
        @livewire('projects.view', ['view' => 'other'])
    </x-card>
</x-app-layout>
