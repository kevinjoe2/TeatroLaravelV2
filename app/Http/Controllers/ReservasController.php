<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Reservas;

class ReservasController extends Controller
{
    public function index() {
    	$reservas = Reservas::all();
		return view("Reservas/index", compact("reservas"));
	}
}
