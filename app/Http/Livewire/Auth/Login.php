<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public User $user;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function mount() {
        $this->user = new User();
    }

    public function login() {

        $data = $this->validate();
        if (Auth::attempt($data)) {
            return redirect(route("upload.images"));
        } else {
            $this->emit("failure");
        }
    }

    public function rules()
    {
        return [
            "email" => "email|required",
            "password" => "min:8|string|required"
        ];
    }
}
