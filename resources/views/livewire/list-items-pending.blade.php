{{-- To-Do --}}
<div>
    <p class="text-gray-400 uppercase"> To-do
   </p>
  
    @forelse ($tasks as $task)
<ul class="mb-6 space-y-2 border border-gray-100 divide-y divide-gray-100 rounded-lg divide-solid ">
        <li class="flex justify-between w-full px-2 py-2 ml-2 text-gray-400">
            <label for="{{ $task -> name }}">{{ $task -> name }}</label>
            <input wire:click="complete({{ $task -> id }})"
                   type="checkbox"
                   class="w-6 h-6 mx-2 my-2 text-indigo-500 form-checkbox"
                   id="task"/>
        </li>
    @empty
        <li class="flex justify-between w-full px-2 py-2 ml-2 text-gray-400">
            Add a task below to get started
            @endforelse
        </li>

</ul>
</div>
