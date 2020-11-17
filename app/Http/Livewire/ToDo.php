<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class ToDo extends Component
{

    public $tasks;

    public function mount()
    {
        $this->tasks = Task::get();
    }

    public function save()
    {
        
    }

    public function render()
    {
        return view('livewire.to-do');
}

}