<?php

namespace App\Http\Livewire\Calendar;

use App\Http\Livewire\Calendar\AppointmentRules;
use App\Models\Appointment;
use Livewire\Component;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;

class AppointmentCalendar extends Component
{
    public Appointment $appointment;
    public $calendarDate;
    public $dates;
    public function render()
    {
        $this->dates = Appointment::all(["startDate"]);
        return view('livewire.calendar.appointment-calendar');
    }

    public function mount() {
        $this->appointment = new Appointment();
    }

    public function pushAppointment(){
        $this->validate();
        $this->appointment->startDate = $this->calendarDate;
        $dateTime = $this->appointment->startDate."T".$this->appointment->startTime;
        $this->appointment->startDateTime = Carbon::create($dateTime, "GMT-07:00");
        $this->appointment->description = $this->appointment->description.". My contact: ".$this->appointment->email.", ".$this->appointment->phone;
        $this->appointment->save();
        Event::create([
            'name' => $this->appointment->name,
            'description' => $this->appointment->description,
            'location' => $this->appointment->location,
            'startDateTime' => $this->appointment->startDateTime,
            'endDateTime' => $this->appointment->startDateTime,
        ]);
        $this->mount();
        $this->emit("created");
        return redirect(route("landscape.index"));
    }

    public function rules() {
        return AppointmentRules::reglas();
    }
}
