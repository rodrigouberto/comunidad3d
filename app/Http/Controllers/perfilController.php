<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\printer;

class perfilController extends Controller
{
    public function miPerfil(){
      return view('miPerfil');
    }
    public function printerProfile(int $id){
      $printer = printer::find($id);
      return view('printerProfile', ['printer' => $printer]);
    }
    public function printerForm(){
      return view('printerForm');
    }
    public function storage(){
      request()->validate([
          'nombreUsuario' => 'required',
          'zona' => 'required',
          'perfil_src'=> 'required',
          'email'=>'required',
          'tel'=>'required'
      ]);
      printer::create(request()->all());
      return redirect('home');
  }
}
