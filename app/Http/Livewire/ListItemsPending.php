<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class ListItemsPending extends Component
{
    public $tasks, $pendingTasks;

    public function mount()
    {
        $this->tasks = Task::all(); // returns a collection, NOT a model

        $this->pendingTasks = $this->tasks->filter( function($task) {
            return  ! $task->is_done;
        });
    }
    public function render()
    {
        return view('livewire.list-items-pending');
    }
}