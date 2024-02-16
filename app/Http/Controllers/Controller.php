<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function exportPDF()
    {
        $view = View('welcome', ['templateContent' => 2]);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view->render());
        return $pdf->stream(); // screenshot #2
    }
}
