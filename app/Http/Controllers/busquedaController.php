<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\printer;
use App\m_Printer;
use DB;


class busquedaController extends Controller
{
  public function buscar(){

  $printers = printer::where('zona',$_GET['zona'])->get();
  // $materiales=m_Printer::where('id_Material',$_GET['Material'])->get();
  // dd($printers);
  return view('busqueda', ['printers' => $printers]);



  }
}
