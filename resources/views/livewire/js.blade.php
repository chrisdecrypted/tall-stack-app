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
