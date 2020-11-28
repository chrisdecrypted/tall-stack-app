{{-- To-Do --}}
<p class="uppercase text-gray-400"> To-do </p>

<ul class="mb-6 border rounded-lg border-gray-100 divide-y divide-gray-100 divide-solid space-y-2 ">
    @forelse ($pendingTasks as $pendingTask)
        <li class="flex w-full justify-between text-gray-400 ml-2 py-2 px-2">
            <label for="{{ $pendingTask -> name }}">{{ $pendingTask -> name }}</label>
            <input wire:model="pendingTasks"
                   type="checkbox"
                   class="form-check-input h-6 w-6 mx-2 my-2 text-teal-600"
                   id="markedTask"
            />
            {{ $pendingTask -> is_done }}

        </li>
    @empty
        <li class="flex w-full justify-between text-gray-400 ml-2 py-2 px-2">
            Add a task below to get started
            @endforelse
        </li>

</ul>


{{-- Add Task --}}


