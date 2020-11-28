<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'tasks';
    public $id = "id";
    public $fillable = [
        'name',
        'is_done',
    ];


//    public function scopeToggle ()
//    {
//        $this->is_done = ! $this->is_done;
//        $this->save();
//        return redirect('/');
//    }


}

