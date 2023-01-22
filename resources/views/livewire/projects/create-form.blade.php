<x-jet-form-section submit="createProject">
    <x-slot name="title">
        {{ __('Create a new Project') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Space for a longer description here too') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="description" value="{{ __('Description') }}" />
            <x-jet-input id="description" type="text" class="mt-1 block w-full" wire:model.defer="description" autocomplete="description" />
            <x-jet-input-error for="description" class="mt-2" />
        </div>

        <!-- Type -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="type" value="{{ __('Type') }}" />
            <x-form.select id="type" class="mt-1 block w-full" wire:model="type">
                <option value="software">Software</option>
                <option value="hardware">Hardware</option>
                <option value="both">Both</option>
                <option value="other">Other</option>
            </x-form.select>
            <x-jet-input-error for="type" class="mt-2" />
        </div>

        {{-- Link --}}
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="link" value="{{ __('Source/Web Link') }}" />
            <x-jet-input id="link" type="text" class="mt-1 block w-full" wire:model.defer="link" autocomplete="link" />
            <x-jet-input-error for="link" class="mt-2" />
        </div>

        {{-- Start Date --}}
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="start_date" value="{{ __('Start Date') }}" />
            <x-jet-input id="start_date" type="date" class="mt-1 block w-full" wire:model="start_date" autocomplete="start_date" />
            <x-jet-input-error for="start_date" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>