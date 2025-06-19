<?php

namespace App\Livewire;

use Livewire\Component;

class EditContact extends Component
{
    public $edit = true;

    public function save()
    {

    }

    public function render()
    {
        return view('livewire.contact');
    }
}
