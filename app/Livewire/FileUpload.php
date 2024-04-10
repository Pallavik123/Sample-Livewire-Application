<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;
    #[Rule('required')]
    public $name;

    #[Rule('file|mimes:pdf,doc,docx|max:2048')]
    public $file;
    
    public $path;
    public function render()
    {
        return view('livewire.file-upload');
    }
}
