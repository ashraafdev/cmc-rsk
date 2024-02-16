<?php

namespace App\Livewire;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class HomePage extends Component
{
    public $ref, $date, $title, $object, $body, $signature;

    public function mount()
    {
        $this->date = date("m/d/Y");
    }

    public function render()
    {
        return view('livewire.home-page');
    }

    public function savePdf()
    {
        session()->flash('ref', $this->ref);
        session()->flash('date', $this->date);
        session()->flash('title', $this->title);
        session()->flash('object', $this->object);
        session()->flash('body', $this->body);
        session()->flash('signature', $this->signature);
 
        $this->redirect('/template');
    }
}
