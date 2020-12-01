{{-- Completed --}}
<p class="text-gray-400 uppercase"> Completed </p>
    <ul class="mb-6 space-y-2 border border-gray-100 divide-y divide-gray-100 rounded-lg divide-solid ">
        @forelse ($tasks as $task)
        <li class="px-2 py-2 ml-2 text-gray-400 line-through">
            <label for="{{ $task -> name }}">{{ $task -> name }}</label>
        </li>
    @empty
        <li class="px-2 py-2 ml-2 text-gray-400"> Use the checkmark above to mark a task as complete. </li>
    @endforelse
</ul>

