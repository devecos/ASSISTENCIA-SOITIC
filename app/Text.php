<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
  protected $table = 'tb_texto';
  protected $primaryKey = 'id_texto';
  
  public function gallery(){
      return $this->hasMany('App\Gallery', 'localizacao', 'galeria');
  }
}
