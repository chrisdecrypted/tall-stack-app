<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Http\Request;


class NewTasks extends Component
{
    public Task $task;

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request) {
    $tasks = Task::create([
        'task_description' => $request-> $task_description,
        'is_complete' => 0
    ]);

    return redirect('/');
    }

    public function render()
    {
        return view('livewire.task');
    }
}
