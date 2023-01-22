<div class="mt-8 flex flex-col">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Type
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Owner
                            </th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($projects as $project)
                            <tr>
                                <x-table.item>
                                    <div>
                                        <div class="font-medium text-gray-900">{{ $project->name }}</div>
                                        <div class="text-gray-500">{{ $project->description }}</div>
                                    </div>
                                </x-table.item>
                                <x-table.item>
                                    {{ Str::title($project->type) }}
                                </x-table.item>
                                <x-table.item>
                                    <span
                                        class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                        {{ Str::title($project->status) }}
                                    </span>
                                </x-table.item>
                                <x-table.item>
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{ $project->user->profile_photo_url }}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="font-medium text-gray-900">{{ $project->user->name }}</div>
                                        </div>
                                    </div>
                                </x-table.item>
                                <x-table.item>
                                    {{-- Edit --}}
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 px-2">Edit<span
                                            class="sr-only">, {{ $project->name }}</span></a>
                                    {{-- View --}}
                                    <a href="/projects/{{ $project->id }}"
                                        class="text-indigo-600 hover:text-indigo-900 px-2">View<span class="sr-only">,
                                            {{ $project->name }}</span></a>
                                    {{-- Delete (only show if owner) --}}
                                    @if ($project->user_id == Auth::user()->id)
                                        <a href="#" class="text-red-600 hover:text-indigo-900 px-2">Delete<span
                                                class="sr-only">, {{ $project->name }}</span></a>
                                    @endif
                                </x-table.item>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
