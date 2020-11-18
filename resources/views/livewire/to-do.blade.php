<body class="bg-gray-100 text-gray-700">
    <div class="container bg-white shadow-xl  rounded-t rounded-b mx-auto max-w-2xl my-14">
        <div class="px-5 py-5">
            <div class="bg white">

                <p class="font-semibold text-2xl">My Tasks</p><br>

                {{-- To-Do --}}
                <p class="uppercase text-gray-400"> to-do </p>
                    <ul class="mb-6 border rounded-lg border-gray-100 divide-y divide-gray-100 divide-solid space-y-2 ">
                        @forelse ($tasks as $task)
                        <li class="text-gray-400 ml-2 py-2 px-2"> {{ $task -> task_description }}
                            <input class="form-checkbox h-6 w-6 ml-2 mb-2 mt-2 mr-2 text-teal-600" type="checkbox" value="on" wire:click="mark">
                            @empty
                        <li class="text-gray-400 ml-2 py-2 px-2"> NO DATA FOUND
                            @endforelse
                        </li>
                    </ul>
                </div>

            </div>
   

        <p class="uppercase text-gray-400"> completed </p>
        <ul class="mb-6 border rounded-lg border-gray-100 divide-y divide-gray-100 divide-solid space-y-2">
            @forelse ($tasks as $task)
            <li class="text-gray-400 ml-2 py-2 px-2 line-through"> {{ $task -> task_description }} </li>
            @empty
            <li class="text-gray-400 ml-2 py-2 px-2 line-through"> NO DATA FOUND </li>
            @endforelse
        </ul>


        <div class="w-full rounded-b bg-gray-100 px-4 py-4">
            <p class="uppercase text-gray-400"> new task: </p>

            <div class="flex bg-gray-200 justify-between">

                <input type="text" class="w-4/5" x-model="task_description" @keydown.enter="save" />
                <button class="w-1/5 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-2 rounded" x-model="task_description" @click="save">Add +</button>
            </div>
        </div>

    </div>
