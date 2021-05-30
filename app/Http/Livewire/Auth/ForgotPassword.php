<?php

namespace App\Http\Livewire\Auth;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPassword extends Component
{
    use WithRateLimiting;

    public $email;
    public $status;

    public function sendLink()
    {
        try {
            $this->rateLimit(10);
        } catch (TooManyRequestsException $exception) {
            $this->addError('general', "Slow down! Please wait another $exception->secondsUntilAvailable seconds to log in.");

            return;
        }

        $validatedData = $this->validate([
            'email' => 'required|string|email',
        ]);

        $this->status = Password::sendResetLink(
            ['email' => $this->email]
        );
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
