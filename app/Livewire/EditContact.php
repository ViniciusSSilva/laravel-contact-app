<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class EditContact extends Component
{
    public $contactObj;

    public $name = '';

    public $contact = '';

    public $email = '';

    public function mount($id)
    {
        $this->contactObj = Contact::findOrFail($id);

        $this->name = $this->contactObj->name;
        $this->contact = $this->contactObj->contact;
        $this->email = $this->contactObj->email;
    }

    public function save()
    {
        $this->validate([
            'name' => ['required', 'min:5'],
            'contact' => ['required', 'max:9'],
            'email' => ['required', 'email'],
        ]);

        $this->contactObj->name = $this->name;
        $this->contactObj->contact = $this->contact;
        $this->contactObj->email = $this->email;

        $this->contactObj->save();

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.edit-contact');
    }
}
