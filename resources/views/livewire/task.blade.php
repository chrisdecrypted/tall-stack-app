<body class="bg-gray-100 text-gray-700">
    <div class="container bg-white shadow-xl  rounded-t rounded-b mx-auto max-w-2xl my-14" x-data="todos()">
        <div class="px-5 py-5">
            <div class="bg white">
            <p class="font-semibold text-2xl">My Tasks</p><br>
            
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

    <p class="uppercase text-gray-400"> completed </p>
    <ul class="mb-6 border rounded-lg border-gray-100 divide-y divide-gray-100 divide-solid space-y-2">
        <li class="text-gray-400 ml-2 py-2 px-2 line-through">List Item 1</li>

    </ul></div>
    <div class="w-full rounded-b bg-gray-100 px-4 py-4">   
         <p class="uppercase text-gray-400"> new task: </p>

        <div class="flex bg-gray-200 justify-between">

            <input type="text" class="w-4/5" x-model="todoTitle" @keydown.enter="addTodo()" />
            <button class="w-1/5 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-2 rounded"
                x-model="todoTitle" @click="addTodo()">Add +</button>
               <?php echo $tasks; ?>
        </div>
    </div>

</div>

        <script>
            function todos() {
                return {
                    todos: [{
                            id: 1,
                            title: 'Task 1',
                            isComplete: false,
                        },
                        {
                            id: 2,
                            title: 'Task 2',
                            isComplete: false,
                        },
                        {
                            id: 3,
                            title: 'Task 3',
                            isComplete: false,
                        }
                    ],
                    todoTitle: '',
                    todoId: 4,
                    addTodo() {
                        if (this.todoTitle.trim() === '') {
                            return;
                        }

                        this.todos.push({
                            id: this.todoId,
                            title: this.todoTitle,
                            isComplete: false,
                        })

                        this.todoId++;
                        this.todoTitle = '';
                    },
                }
            }

        </script>
