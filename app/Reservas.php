<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
	public function cliente(){
	   return $this->belongsTo('App\Clientes');
	} 
}
