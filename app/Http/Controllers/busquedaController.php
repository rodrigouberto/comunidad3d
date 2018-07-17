<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\printer;



class busquedaController extends Controller
{
  public function buscar(){

    $printers = printer::where('zona',$_GET['zona'])->get();
    return view('busqueda', ['printers' => $printers]);

    // $mPrinters = mPrinter::where('id_material', $_GET['Material'])->get();
    // return view('busqueda', ['mPrinters' => $mPrinters]);

  }
}
