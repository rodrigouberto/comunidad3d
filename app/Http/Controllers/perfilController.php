<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\printer;
use Auth;
use App\User;

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
    public function storage(Request $request){
      request()->validate([
          'nombreUsuario' => 'required',
          'zona' => 'required',
          'perfil_src'=> 'required',
      ]);
      $printer=new printer;
      $printer->nombreUsuario=$request->input('nombreUsuario');
      $printer->zona=$request->input('zona');
      $printer->perfil_src=$request->input('perfil_src');
      $printer->save();
      $user=User::find(Auth::user()->id);
      $user->printers_id=$printer->id;
      $user->save();
      return redirect('printit');
  }
}
