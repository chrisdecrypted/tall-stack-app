{{-- To-Do --}}
<div>
    <p class="uppercase text-gray-400"> To-do
   </p>
    {{ $tasks }}
    @forelse ($tasks as $task)
<ul class="mb-6 border rounded-lg border-gray-100 divide-y divide-gray-100 divide-solid space-y-2 ">
        <li class="flex w-full justify-between text-gray-400 ml-2 py-2 px-2">
            <label for="{{ $task -> name }}">{{ $task -> name }}</label>
            <input wire:click="complete({{ $task -> id }})"
                   type="checkbox"
                   class="form-check-input h-6 w-6 mx-2 my-2 text-teal-600"
                   id="task"/>
            {{ $task -> is_done }}
        </li>
    @empty
        <li class="flex w-full justify-between text-gray-400 ml-2 py-2 px-2">
            Add a task below to get started
            @endforelse
        </li>

</ul>
</div>
