<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class Task extends Component
{
    public function render()
    {
        $tasks = DB::table('tasks')->get(); 
        return view('livewire.task', ['tasks' => $tasks]);
    }
}