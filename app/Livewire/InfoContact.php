<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class InfoContact extends Component
{
    public $contact;

    public function mount($id)
    {
        $this->contact = Contact::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.info-contact');
    }
}
