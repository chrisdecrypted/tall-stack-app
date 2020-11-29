<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddListItem extends Component
{
    public $input;

    public function render()
    {
        return view('livewire.add-list-item');
    }
}
