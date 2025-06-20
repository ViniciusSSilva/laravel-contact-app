<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $model;

    public $name = '';

    public $contact = '';

    public $email = '';

    public function mount($id = null) {
        if($id) {
            $this->model = Contact::find($id);

            if(!$this->model) {
                return $this->redirect('/');
            }

            $this->name = $this->model->name;
            $this->contact = $this->model->contact;
            $this->email = $this->model->email;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => ['required', 'between:5,255'],
            'contact' => [
                'required',
                'integer',
                'digits:9',
                (!$this->model || $this->model->contact !== $this->contact) ? 'unique:contacts' : ''
            ],
            'email' => [
                'required',
                'email',
                (!$this->model || $this->model->email !== $this->email) ? 'unique:contacts' : ''
            ],
        ]);

        if(!$this->model) {
            $this->model = new Contact();
        }

        $this->model->name = $this->name;
        $this->model->contact = $this->contact;
        $this->model->email = $this->email;

        $this->model->save();

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
