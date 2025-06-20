<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Dashboard extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::select('id', 'name')->get();
    }

    public function deleteContact($id)
    {
        if(!auth()->check()) {
            abort(403);
        }

        $contact = Contact::findOrFail($id);

        $contact->delete();

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.dashboard')->with([
            'contacts' => $this->contacts
        ]);
    }
}
