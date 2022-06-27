<?php

use App\Http\Livewire\Calendar\AppointmentCalendar;
use App\Http\Controllers\BotManController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Gallery\Gallery;
use App\Http\Livewire\Gallery\UploadImageController;
use App\Http\Livewire\Index\Index;

Route::get("/", Index::class)->name("landscape.index");

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
Route::get("/gallery", Gallery::class)->name("landscape.gallery");
Route::get("/appointment", AppointmentCalendar::class)->name("landscape.appointments");

//Route::get("/login", Login::class)->name("landscape.login");
//Route::group(["middleware" => "auth"], function(){
    Route::get("/upload", UploadImageController::class)->name("upload.images");
    //Route::get("/logout", Logout::class)->name("landscape.logout");
//});
