<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Http\Request;

class ToDo extends Component
{

    public $tasks;
    public $completedTasks;
    public $incompleteTasks;
    public $task_description;
    public $newTodo;
    public $input;

    protected $rules = [
        'input' => 'required|max:255',
    ];


    public function mount()
    {
        $this->tasks = Task::get();
        
        $this->incompleteTasks = $this->tasks->filter( function($task) {
            return  ! $task->is_complete;
         });
         $this->completedTasks = $this->tasks->filter( function($task) {
            return  $task->is_complete;
         });
    }

    public function markComplete() {
        $this->incompleteTasks = $this->tasks->filter( function($task) {
            return  ! $task->is_complete;
         });
        return view('livewire.to-do');

    }

    public function saveDesc() {
      $this->input = $this->tasks->filter( function($task){
          return $task->task_description;
      });
    }


    public function render()
    {
        return view('livewire.to-do');
    }

}