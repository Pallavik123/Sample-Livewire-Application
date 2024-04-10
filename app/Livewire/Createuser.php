<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\User;

class Createuser extends Component
{

     public $name='Awesome Name';

    // public $users;

    /* public function mount()
     {
        $this->users=User::all();
     }*/

    public function render()
    {
        return view('livewire.createuser')->with([
            'email'=>'arati005@outlook.com', 'users'=>User::all()
        ]);
    }
}
