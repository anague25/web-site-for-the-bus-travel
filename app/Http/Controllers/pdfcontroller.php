<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Ticket;

class pdfcontroller extends Controller
{
   public function pdf($id){
   
$data = Ticket::findOrFail($id);

// dd($data);
    $pdf = Pdf::loadView('err',['data'=>$data] );
    return $pdf->download('err.pdf');
   }
}
