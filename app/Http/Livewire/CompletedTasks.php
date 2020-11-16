<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class CompletedTasks extends Component
{
    public function render()
    {
        $tasks = DB::table('tasks')->get(); 
        
        return view('livewire.completed-tasks', ['tasks' => $tasks]);
    }
}
