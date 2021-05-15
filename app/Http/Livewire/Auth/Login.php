<?php

namespace App\Http\Livewire\Auth;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    use WithRateLimiting;

    public $email;
    public $password;

    public function login()
    {
        try {
            $this->rateLimit(10);
        } catch (TooManyRequestsException $exception) {
            $this->addError('general', "Slow down! Please wait another $exception->secondsUntilAvailable seconds to log in.");

            $this->email = '';
            $this->password = '';

            return;
        }

        $validatedData = $this->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validatedData)) {
            $this->email = '';
            $this->password = '';

            return redirect()->intended('dashboard');
        }

        $this->password = '';

        $this->addError('general', 'Check credentials!');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
