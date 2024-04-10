<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attribute\Title;

class Counter extends Component


{
    public $count = 0;

    public $limit = 5;
    protected $layout = 'layouts.app';
    # [LAYOUT('components.layouts.app')]
    // //#[Title('My Counter Page')]
    // public function mount()
    // {
    //     $this->setTitle('My awesome Title');
    // }

    public function render()
    {
        return view('livewire.counter', [
            'metaKeys' => 'key1,key2,key3',
            'metaDescription' => 'Some Description',
            'metaAuthor' => 'J.s.Katre',
            'title' => 'My very awesome Title',
        ]);
    }
    
    

    public function increment()
    {
        if ($this->count < $this->limit) {
            $this->count++;
        } else {
            session()->flash('status', 'The count is too high');
        }
    }
    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
        } else {
            session()->flash('status', 'The count is too low');
        }
    }
}
