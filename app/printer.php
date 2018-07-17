<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class printer extends Model
{
  public function materiales()
  {
      return $this->belongsToMany('App\Material', 'm_Printers', 'id_impresor', 'id_material');
  }
}
