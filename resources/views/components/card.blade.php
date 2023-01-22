<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                {{-- <div>
                    <x-jet-application-logo class="block h-12 w-auto" />
                </div> --}}

                <div class="mt-8 text-2xl">
                    @if (isset($title))
                        {{ $title }}
                    @endif
                </div>

                {{ $slot }}
            </div>
        </div>
    </div>
</div>
