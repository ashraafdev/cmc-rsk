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
        /* //dd($this->ref, $this->date, $this->title, $this->object, $this->body, $this->signature);

        $pdf = PDF::loadView('welcome', []);

        // You can customize the PDF options if needed
        // For example:
        // $pdf->setPaper('A4', 'landscape');

        return $pdf->download('example.pdf');
       /*  return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'name.pdf'); */ 

        session()->flash('status', 'Post successfully updated.');
        session()->flash('status', 'Post successfully updated.');
        session()->flash('status', 'Post successfully updated.');
        session()->flash('status', 'Post successfully updated.');
 
        $this->redirect('/file');
    }
}
