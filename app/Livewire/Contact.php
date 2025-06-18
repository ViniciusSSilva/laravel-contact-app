<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    private $edit = false;

    public function render()
    {
        return view('livewire.contact');
    }
}
