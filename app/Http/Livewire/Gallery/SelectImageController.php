<?php

namespace App\Http\Livewire\Gallery;

use Livewire\Component;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;

class SelectImageController extends Component
{
    public $photos;
    public function render()
    {
        $this->photos = Photo::all();
        return view('livewire.gallery.select-image-controller');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("login"));
    }
}
