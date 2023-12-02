<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Gallery extends Component
{
    use WithFileUploads;

    #[Validate('image|max:1024')]
    public $photo;

    public function save() {  
        $this->photo->store('photos', 'public');
        $this->photo = null;
    }

    public function render()
    {
        $imagesFiles = Storage::files('public/photos'); 

        return view('livewire.gallery', [
            'images' => $imagesFiles
        ]);
    }
}
