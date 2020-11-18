<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Http\Request;

class ToDo extends Component
{

    public $tasks;
    public $desc;
    public $save;
    public $markComplete;

    public function mount()
    {
        $this->tasks = Task::get();
    }

    public function save()
    {

        $desc = $this->tasks->task_description;
        $save = Task::save();
        dd($desc);
    }

    public function mark()
    {
        $markComplete = $this->tasks->is_complete = 1;
        dd($markComplete);
    }

    public function render()
    {
        return view('livewire.to-do');
    }

}