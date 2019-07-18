<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
	public function reservas(){
	   return $this->hasMany('App\Reservas');
	} 
}
