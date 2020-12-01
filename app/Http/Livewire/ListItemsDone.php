<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class ListItemsDone extends Component
{
    public $tasks;
    public function mount()
    {
        $this->tasks = Task::all();
        $this->tasks = $this->tasks->filter( function($task) {
            return  $task->is_done;
        });
    }
    public function render()
    {
        return view('livewire.list-items-done');
    }
}
