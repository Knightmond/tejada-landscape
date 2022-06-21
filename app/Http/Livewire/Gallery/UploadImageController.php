<?php

namespace App\Http\Livewire\Gallery;

use Livewire\Component;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class UploadImageController extends Component
{
    use WithFileUploads;
    public $picture;
    public Photo $data;

    public function render()
    {
        $picture = $this->picture;
        $data = $this->data;
        return view('livewire.gallery.upload-image-controller', compact("picture","data"));
    }

    public function mount(){
        $this->data = new Photo();
    }

    public function save() {
        $this->validate([
            'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $this->data->picture = Storage::disk("public")->put("img", $this->picture);
        $this->data->save();
        $this->mount();
    }

}
