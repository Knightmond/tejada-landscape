<?php

namespace App\Http\Livewire\Gallery;

use App\Models\Photo;
use Livewire\Component;

class EditImagesController extends Component
{
    public Photo $photo;
    public $active = true;

    public function render()
    {
        return view('livewire.gallery.edit-images-controller');
    }

    public function edit() {
        $this->photo->active = $this->active;
        $this->photo->save();
        return redirect(route("select.images"));
    }
}
