<?php

namespace App\Livewire;

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

        [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password]))
        {
            session()->flash('message', 'You have successfully logged in!');

            return $this->redirect('/');
        }

        session()->flash('error', 'Invalid credentials!');
    }

    public function render()
    {
        return view('livewire.login')
            ->layout('components.layouts.login');
    }
}
