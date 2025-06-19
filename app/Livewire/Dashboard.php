<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Dashboard extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::where('deleted_at', null)->get();
    }

    public function deleteContact($id)
    {
        if(!auth()->check()) {
            abort(403);
        }

        $contact = Contact::findOrFail($id);

        $contact->delete();
    }

    public function render()
    {
        return view('livewire.dashboard')->with([
            'contacts' => $this->contacts
        ]);
    }
}
