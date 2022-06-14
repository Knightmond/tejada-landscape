<?php

use App\Http\Livewire\Calendar\AppointmentCalendar;
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Gallery\Gallery;
use App\Http\Livewire\Index\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", Index::class)->name("landscape.index");

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

Route::get("/gallery", Gallery::class)->name("landscape.gallery");
Route::get("/appointment", AppointmentCalendar::class)->name("landscape.appointments");
