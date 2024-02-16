<?php

namespace App\Livewire;

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
        dd($this->ref, $this->date, $this->title, $this->object, $this->body, $this->signature);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'name.pdf');
    }
}
