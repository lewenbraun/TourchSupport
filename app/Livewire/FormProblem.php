<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormProblem extends Component
{
    use WithFileUploads;

    public $fio = '';
    public $email = '';
    public $phone = '';
    public $text = '';
    public $file = '';
    public $checkbox = 0;

    public function save() {
        $this->validate([
            'file' => 'nullable|image|max:10000',
            'fio' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:12',
            'text' => 'required|max:255|min:10',
            'checkbox' => 'accepted'
        ]);


//здесь все данные которые пришли из валидации
//        Contact::create([
//            'path_file' => $this->file ? $this->file->store('photos') : 'no-photo-available.png',
//            'name' => $this->fio,
//            'email' => $this->email,
//            'phone' => $this->phone,
//            'text' => $this->text,
//        ]);

        return redirect()->to('/company');
    }

    public function render()
    {
        return view('livewire.support.form-problem');
    }
}
