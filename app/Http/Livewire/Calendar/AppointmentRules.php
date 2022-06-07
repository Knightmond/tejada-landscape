<?php

namespace App\Http\Livewire\Calendar;

class AppointmentRules {
    public static function reglas() {
        return [
            "appointment.name" => "required|string",
            "appointment.description" => "nullable|string",
            "appointment.startDateTime" => "required|date",
            "appointment.location" => "required|string",
            "appointment.email" => "required|email",
            "appointment.phone" => "nullable|string"
        ];
    }
}
