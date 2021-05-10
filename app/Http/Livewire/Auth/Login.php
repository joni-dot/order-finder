<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function mount()
    {
    }

    public function login()
    {
        $validatedData = $this->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validatedData)) {
            return redirect()->intended('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
