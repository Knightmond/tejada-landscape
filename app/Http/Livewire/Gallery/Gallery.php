<?php

namespace App\Http\Livewire\Gallery;

use App\Models\Photo;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        $photos = Photo::all();
        return view('livewire.gallery.gallery',compact("photos"));
    }
}
