@extends("layouts.plantilla")

@section("title")
Clientes
@endsection

@section("header")
<h3>Clientes</h3>
@endsection

@section("body")
<br>
<div class="card-deck">
@foreach($clientes as $cliente)
<div class="card" style="width: 18rem;">
	<img src="{{asset('media/client_1.jpg')}}" class="card-img-top img-thumbnail" alt="client_1">
	<div class="card-body">
		<h5 class="card-title">{{$cliente->nombre}}</h5>
		<p class="card-text">C.I.: {{$cliente->cedula}}</p>
		<p class="card-text">Nacimiento.: {{$cliente->fechaNacimiento}}</p>
	</div>
</div>
@endforeach
</div>
<br>
@endsection

@section("footer")
<br>
<span>Derechos reservados</span>
@endsection