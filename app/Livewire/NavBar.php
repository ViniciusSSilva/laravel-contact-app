<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{
    public function logout()
    {
        auth()->logout();

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
