<?php

namespace App\Http\Livewire;

use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SupportAdmin extends Component
{
    public $users = [];

    public $user = null;

    public $thread = null;

    public $reply = null;

    public function mount()
    {
        $ids = DB::table('questions')->select('user_id')->where('type', 'support')->distinct()->pluck('user_id');
        $ids = $ids->toArray();
        $this->users = User::find($ids);
    }

    public function updatedUser($value)
    {
        if ($value !== null) {
            $this->thread = Question::where('type', 'support')->where('user_id', $value)->get();
        }
    }

    public function saveReply()
    {
        $latest = $this->thread->last();
        if (empty($latest->answer)) {
            $latest->answer = $this->reply;
        } else {
            $latest->answer = $latest->answer."\n".$this->reply;
        }
        $latest->save();
        $this->reply = null;
    }

    public function render()
    {
        return view('livewire.support-admin');
    }
}


