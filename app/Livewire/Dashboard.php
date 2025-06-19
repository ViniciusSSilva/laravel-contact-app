<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Dashboard extends Component
{
    public $contacts;

    public function __construct()
    {
        $this->contacts = Contact::all();
    }

    public function deleteContact($id)
    {
        if(!auth()->check()) {
            abort(403);
        }

        $contact = Contact::findOrFail($id);

        $contact->softDelete();
    }

    public function render()
    {
        return view('livewire.dashboard')->with([
            'contacts' => $this->contacts
        ]);
    }
}
