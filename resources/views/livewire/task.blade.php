<body class="bg-gray-200 text-gray-700">
    <div class="container mx-auto max-w-md px-4 my-4" x-data="todos()">
        <div class="bg-white shadow-lg rounded px-6 py-4">
            <h2 class="text-4xl">My Tasks</h2>
            
            <ul class="mb-6 rounded border-2 border-gray-100 divide-y divide-solid space-y-2">
                <template x-for="todo in todos" :key="todo.id">
                    <li class=" flex w-full justify-between ">

                            <div class="flex w-full" :class="{ 'line-through' : todo.isComplete }">
                            <div class="ml-2 py-2 px-2" x-text="todo.title"></div></div>
                            <input class="form-checkbox h-4 w-4 text-indigo-600  py-0 px-0 mr-2" type="checkbox" x-model="todo.isComplete">

                    </li>   
                </div>
            </div>
           </template>                                
            </ul>
        </div>
        
        <div class="w-full justify-between">
            New task:<br>
            <input 
                type="text" 
                class="shadow-lg w-xl px-2 py-2" 
                x-model="todoTitle"
                @keydown.enter="addTodo()">

            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-2 rounded" x-model="todoTitle" @click="addTodo()"> Add + </button>

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