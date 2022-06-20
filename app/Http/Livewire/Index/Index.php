<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;
use App\Models\Appointment;

class Index extends Component
{
    public $dates;
    public function render()
    {
        $this->dates = Appointment::all(["startDate"]);
        return view('livewire.index.index');
    }
}
