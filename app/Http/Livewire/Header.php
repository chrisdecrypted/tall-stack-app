<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $tasks;
    public function render()
    {
        return view('livewire.header');
    }
}
