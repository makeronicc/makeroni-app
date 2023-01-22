<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="text-xl font-semibold text-gray-900 text-center pb-4">Login or Sign Up</h1>

        {{-- Links to login and register --}}

        <div class="flex justify-center">
            <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-700 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:w-auto">
                Login
            </a>
            <a href="{{ route('register') }}" class="ml-4 inline-flex items-center justify-center rounded-md border border-transparent bg-green-700 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:w-auto">Sign
                Up
            </a>
        </div>

    </x-jet-authentication-card>
</x-guest-layout>
