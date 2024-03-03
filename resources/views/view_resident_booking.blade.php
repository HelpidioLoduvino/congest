@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Reserva</h4>
<div class="condo-separator"></div>
@if (!empty($booking))
<div class="card card-body shadow-card mt-3">
<h5>Assunto: <strong>{{$booking->subject}}</strong></h5>
<h5>Data De Reserva: <strong>{{$booking->booking_date}}</strong></h5>
<p>{{$booking->booking}}</p>
<small class="text-muted">Data De Envio: {{$booking->booking_date}}</small>
</div>
@endif
@endsection
