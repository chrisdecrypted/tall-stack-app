<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class ListItemsPending extends Component
{
    public $tasks;

    public function mount() {
        $this->tasks = Task::all();
        $this->tasks = $this->tasks->filter( function($task) {
            return  ! $task->is_done;
        });
    }
    public function complete($id) {
        $tasks = Task::find($id); // id passed to livewire from component
        $tasks->is_done = ! $tasks->is_done; // setting to 0 or 1 depending on the previous value before livewire click called
        $tasks->save();
        return $this->redirect('/');
    }
    public function render() {
        return view('livewire.list-items-pending');
    }
}
