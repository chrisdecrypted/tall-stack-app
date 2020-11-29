 <p class="uppercase text-gray-400"> completed </p>
    <ul class="mb-6 border rounded-lg border-gray-100 divide-y divide-gray-100 divide-solid space-y-2">
        @forelse ($tasks as $task)
        <li class="text-gray-400 ml-2 py-2 px-2 line-through">  {{ $task->task_description }} </li>
        @empty
        <li class="text-gray-400 ml-2 py-2 px-2 line-through"> None </li>
        @endforelse
 </ul>
