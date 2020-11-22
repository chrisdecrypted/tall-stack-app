<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Http\Request;

class ToDo extends Component
{
    public $tasks, $pendingTasks, $doneTasks, $input, $isComplete;

    public function mount()
    {
        $this->tasks = Task::get();

        $this->pendingTasks = $this->tasks->filter( function($task) {
            return  ! $task->is_complete;
         });

         $this->doneTasks = $this->tasks->filter( function($task) {
            return  $task->is_complete;
         });
    }

    public function markComplete() {
        echo $this->tasks[0]->is_complete;
        return redirect('/');
    }

    public function addTask() {
     //
    }


    public function render()
    {
        return view('livewire.to-do');
    }

}