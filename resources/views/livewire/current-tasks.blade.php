           {{-- To-Do --}}
            <p class="uppercase text-gray-400"> to-do </p>
            <ul class="mb-6 border rounded-lg border-gray-100 divide-y divide-gray-100 divide-solid space-y-2">
                <template x-for="todo in todos" :key="todo.id">
                    <li class="flex w-full justify-between text-gray-400">
                        <div class="flex w-full" :class="{ 'line-through' : todo.isComplete }">
                            <div class="ml-2 mb-2 py-2 px-2" x-text="todo.title"></div>
                        </div>
                        <input
                            class="form-checkbox h-6 w-6 ml-2 mb-2 mt-2 mr-2 text-teal-600"
                            type="checkbox" x-model="todo.isComplete">
                    </li>
                </ul>
        </div>
    </template>
    </div>