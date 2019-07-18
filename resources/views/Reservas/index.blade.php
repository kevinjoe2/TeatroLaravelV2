@extends("layouts.plantilla")

@section("title")
Reservas
@endsection

@section("header")
<h3>Reservas</h3>
@endsection

@section("body")
<br>
</div>
<ul class="list-unstyled">
	@foreach($reservas as $reserva)
	<li class="media">
		<img src="{{asset('media/reserva_1.jpg')}}" class="w-25 mr-3 rounded-sm img-fluid img-thumbnail" alt="reserva_1.jpg">
		<div class="media-body">
			  <h5 class="mt-0 mb-1">{{$reserva->codigo}}</h5>
			  {{$reserva->estado}} - {{$reserva->fecha}}
		</div>
	</li>
	@endforeach
</ul>
<br>
@endsection

@section("footer")
<br>
<span>Derechos reservados</span>
@endsection