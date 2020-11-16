<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class CurrentTasks extends Component
{
    
    public function render()
    {
        return view('livewire.current-tasks');
    }
}
