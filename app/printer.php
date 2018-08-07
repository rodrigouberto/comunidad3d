<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class printer extends Model
{

  protected $fillable = [
      'nombreUsuario', 'zona','perfil_src', 'email', 'tel'
  ];
  // public function materiales(){
  //   return $this->hasMany('App\m_Printer','id_impresor','id');
  // }
  // public function materiales()
  // {
  //   return $this->belongsToMany('App\Material','m_Printers','id_impresor','id_material');
  // }

//   public function materialesPrinters() {
//     return $this->materiales()->wherePivot('id_material',"=", $_GET['Material']);
// }

}
