<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact as ContactModel;

class Contact extends Component
{
    public $contact;

    public function mount($id)
    {
        $this->contact = ContactModel::find($id);

        if(!$this->contact) {
            return $this->redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
