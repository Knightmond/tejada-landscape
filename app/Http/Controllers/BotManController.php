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

            if ($message == 'hi') {
                $this->askName($botman);
            } elseif ($message == 'hello') {
                $this->askName($botman);
            } elseif ($message == 'price') {
                $this->price($botman);
            } elseif ($message == 'services') {
                $this->services($botman);
            } elseif ($message == 'location') {
                $this->location($botman);
            } elseif ($message == 'who are you?') {
                $this->history($botman);
            } elseif ($message == 'booking') {
                $this->booking($botman);
            }elseif ($message == 'help') {
                $botman->reply("Send price to ask for our prices. \nSend services to learn about our current services. \nSend location to learn about our location.\nSend who are you? to learn about us and our history. \nSend booking to learn how to book an appointment with us.");
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
        $botman->reply("Here are our current pricings!\nLandscaping/Hardscaping : XX.XX$\nDeep cleaning services : XX.XX$\nGardening : XX.XX$\n \nPlease note that this prices are the baseline and they may increase according to the size and complexity of the project. Final prices will be given upon meeting.");
    }

    public function services($botman)
    {
        $botman->reply("The current services that we offer are:\nLandscaping\nHardscaping\nDeep cleaning\n\n");
    }

    public function location($botman)
    {
        $botman->reply("Our current location is: \nlmao idk plz help me");
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
