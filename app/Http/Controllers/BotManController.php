<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            //mayusculas
            if ($message == 'Hi') {
                $this->askName($botman);
            } elseif ($message == 'Hello') {
                $this->askName($botman);
            } elseif ($message == 'Hii') {
                $this->askName($botman);
            } elseif ($message == 'Good morning') {
                $this->askName($botman);
            } elseif ($message == 'Good evening') {
                $this->askName($botman);
            } elseif ($message == 'Good afternoon') {
                $this->askName($botman);
            } elseif ($message == 'Good Morning') {
                $this->askName($botman);
            } elseif ($message == 'Good Evening') {
                $this->askName($botman);
            } elseif ($message == 'Good Afternoon') {
                $this->askName($botman);
            } elseif ($message == 'Hey') {
                $this->askName($botman);
            } elseif ($message == 'Price') {
                $this->price($botman);
            } elseif ($message == 'Prices') {
                $this->price($botman);
            } elseif ($message == 'Cost') {
                $this->price($botman);
            } elseif ($message == 'How much?') {
                $this->price($botman);
            } elseif ($message == 'Services') {
                $this->services($botman);
            } elseif ($message == 'Location') {
                $this->location($botman);
            } elseif ($message == 'Where at') {
                $this->location($botman);
            } elseif ($message == 'Where') {
                $this->location($botman);
            } elseif ($message == 'State') {
                $this->location($botman);
            } elseif ($message == 'Place') {
                $this->location($botman);
            } elseif ($message == 'Located') {
                $this->location($botman);
            } elseif ($message == 'Who are you?') {
                $this->history($botman);
            } elseif ($message == 'History') {
                $this->history($botman);
            } elseif ($message == 'Company') {
                $this->history($botman);
            } elseif ($message == 'Booking') {
                $this->booking($botman);
            } elseif ($message == 'Appointment') {
                $this->booking($botman);
            } elseif ($message == 'Apointment') {
                $this->booking($botman);
            }elseif ($message == 'Help') {
                $botman->reply("Send price to ask for our prices. <br>Send services to learn about our current services. <br>Send location to learn about our location.<br>Send who are you? to learn about us and our history. <br>Send booking to learn how to book an appointment with us.");


            // minusculas
            }elseif ($message == 'hi') {
                $this->askName($botman);
            } elseif ($message == 'hello') {
                $this->askName($botman);
            } elseif ($message == 'hii') {
                $this->askName($botman);
            } elseif ($message == 'good morning') {
                $this->askName($botman);
            } elseif ($message == 'good evening') {
                $this->askName($botman);
            } elseif ($message == 'good afternoon') {
                $this->askName($botman);
            } elseif ($message == 'hey') {
                $this->askName($botman);
            } elseif ($message == 'price') {
                $this->price($botman);
            } elseif ($message == 'prices') {
                $this->price($botman);
            } elseif ($message == 'cost') {
                $this->price($botman);
                
            } elseif ($message == 'how much?') {
                $this->price($botman);
            } elseif ($message == 'services') {
                $this->services($botman);
            } elseif ($message == 'location') {
                $this->location($botman);
            } elseif ($message == 'where at') {
                $this->location($botman);
            } elseif ($message == 'where') {
                $this->location($botman);
            } elseif ($message == 'state') {
                $this->location($botman);
            } elseif ($message == 'place') {
                $this->location($botman);
            } elseif ($message == 'located') {
                $this->location($botman);
            } elseif ($message == 'who are you?') {
                $this->history($botman);
            } elseif ($message == 'history') {
                $this->history($botman);
            } elseif ($message == 'company') {
                $this->history($botman);
            } elseif ($message == 'booking') {
                $this->booking($botman);
            } elseif ($message == 'appointment') {
                $this->booking($botman);
            } elseif ($message == 'apointment') {
                $this->booking($botman);
            }elseif ($message == 'help') {
                $botman->reply("Send price to ask for our prices. <br>Send services to learn about our current services. <br>Send location to learn about our location.<br>Send who are you? to learn about us and our history. <br>Send booking to learn how to book an appointment with us.");
            } else {
                $botman->reply("Sorry. I couldn't understand you. If you need help just send me a message saying 'help'!");
            }
        });

        $botman->listen();
    }

    protected $name;

    public function askName($botman)
    {

        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $this->name = $answer->getText();

            $this->say('Nice to meet you ' . $this->name);
        });
    }

    public function price($botman)
    {
        $botman->reply("Here are our current pricings!<br>Landscaping/Hardscaping : XX.XX$<br>Deep cleaning services : XX.XX$<br>Gardening : XX.XX$<br> <br>Please note that this prices are the baseline and they may increase according to the size and complexity of the project. Final prices will be given upon meeting.");
    }

    public function services($botman)
    {
        $botman->reply("The current services that we offer are:<br>Landscaping<br>Hardscaping<br>Deep cleaning<br><br>");
    }


    public function location($botman)
    {
        $botman->reply("Our current location is: <br>lmao idk plz help me");
    }

    public function history($botman)
    {
        $botman->reply("Tejada Landscape Inc is located in Desert Hot Springs, California and has been family run. This organization has been operating primarily in the landscape services business/industry within the agricultural services sector since 1986.");
    }

    public function booking($botman)
    {
        $botman->reply("To hire our services first you must book an appointment with us. The appointment will be done online and in there we will discuss the project at hand as well as give you an estimate of the amount of time and money required to finish this job. To book an appointment simply scroll down to the end of the website and select a date, after that just follow the instructions on screen.");
    }

}
