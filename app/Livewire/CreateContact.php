<?php

namespace App\Livewire;

use Livewire\Component;

class CreateContact extends Component
{
    public $name = '';
    public $contact = '';
    public $email = '';

    public function save()
    {
        Contact::create($this->only(['name', 'contact', 'email']));
    }

    public function render()
    {
        return view('livewire.create-contact');
    }
}
