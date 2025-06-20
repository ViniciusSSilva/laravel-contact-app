<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';

    public $password = '';

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password]))
        {
            return $this->redirect('/');
        } else {
            throw ValidationException::withMessages(['login' => 'Invalid Login']);
        }
    }

    public function render()
    {
        return view('livewire.login')
            ->layout('components.layouts.login');
    }
}
