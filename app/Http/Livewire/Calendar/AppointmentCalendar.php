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
    public function render()
    {
        return view('livewire.calendar.appointment-calendar');
    }

    public function mount() {
        $this->appointment = new Appointment();
    }

    public function pushAppointment(){
        // $this->validate();
        dd($this->appointment);
        // $date = Carbon::create($this->appointment->startDateTime, "GMT-07:00");
        // $e = new Event();
        // $e->name = $this->appointment->name;
        // $e->description = $this->appointment->description;
        // $e->startDateTime = Carbon::create($date);
        // $e->endDateTime = Carbon::create($date);
        // $e->location = $this->appointment->location;
        // $optParams = [
        //     "sendNotifications" => true
        // ];

        // $e->save("insertEvent", $optParams);
        // // $e->save();
    }

    public function rules() {
        return AppointmentRules::reglas();
    }
}
