<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;
use App\Models\Appointment;
use App\Models\Photo;

class Index extends Component
{
    public $dates;
    public function render()
    {
        $photos = Photo::all()->where("active","=","1");
        $this->dates = Appointment::all(["startDate"]);
        return view('livewire.index.index',compact("photos"));
    }
}
