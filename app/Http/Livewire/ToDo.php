<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Task;

class ToDo extends Component
{
    public $taskModel, $tasks, $pendingTasks, $doneTasks, $isDone, $input;

    public function mount()
    {
        
        $this->tasks = Task::get(); // returns a collection, NOT a model
        // $this->isDone = $this->tasks->is_done;

        $this->pendingTasks = $this->tasks->filter( function($task) {
            return  ! $task->is_done;
         });

         $this->doneTasks = $this->tasks->filter( function($task) {
            return  $task->is_done;
         });

    }

    public function toggle () {
        // $tasks = Task::get();
        // $this->tasks->is_done = true;
        $tasks = 
        $tasks->is_done = true; 
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