<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class AddListItem extends Component
{
    public $input;

    public function addTask() {
        $input = $this->input;
        $task = Task::create([
        'name' => $input
        ]);
        return redirect('/');
        }
    public function render()
    {
        return view('livewire.add-list-item');
    }
}
