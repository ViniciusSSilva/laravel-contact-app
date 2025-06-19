<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class CreateContact extends Component
{
    public $title = 'Create Contact';

    public $name = '';

    public $contact = '';

    public $email = '';

    public function save()
    {
        $this->validate([
            'name' => ['required', 'min:5'],
            'contact' => ['required', 'max:9'],
            'email' => ['required', 'email'],
        ]);

        Contact::create($this->only(['name', 'contact', 'email']));

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-contact');
    }
}
