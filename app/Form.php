<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
   protected $table = 'conversatorio';
   protected $primaryKey = 'id';
   protected $fillable = ['localidad'];

public function localidades()
   {
       return $this->belongsTo('App\Localidad','localidad');
   }

}



