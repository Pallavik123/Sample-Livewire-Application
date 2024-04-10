<?php

namespace App\Livewire;

use Dotenv\Validator;
use Livewire\Component;

use Livewire\Attributes\Rule;
 use Livewire\Attributes\Rule as AttributesRule;

class Registeruser extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required|unique:users|email')]
    public $email;

    #[Rule('required|min:9')]
    public $password;

    public function save()
    {
     $this->validate();
    
       
        //dd('hi');
    }
    public $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password'=>'required|min:9'
            
    ];
    public function render()
    {
        return view('livewire.registeruser');
    }
}


