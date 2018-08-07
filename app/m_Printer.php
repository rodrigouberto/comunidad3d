<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Pivot;

class m_Printer extends Model
{
  protected $table = 'm_Printers';

  public function materiales(){
    return $this->hasMany('App\printer','id','id');
  }
  
}
