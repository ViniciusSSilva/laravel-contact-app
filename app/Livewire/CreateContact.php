<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class CreateContact extends Component
{
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

        $contact = new Contact();

        $contact->name = $this->name;
        $contact->contact = $this->contact;
        $contact->email = $this->email;

        $contact->save();

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-contact');
    }
}
