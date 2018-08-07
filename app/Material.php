<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $table = 'materiales';
  protected $primaryKey = 'id_material';

  public function impresores()
  {
      return $this->belongsToMany('App\printer', 'm_Printers', 'id_material', 'id_impresor');
  }

  public function materialesPrinters() {
    return $this->impresores()->wherePivot('id_material',"=", $_GET['Material']);
}


}
