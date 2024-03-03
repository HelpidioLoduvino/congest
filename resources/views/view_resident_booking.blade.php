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

<div class="d-flex justify-content-center mt-3">
    <div class="d-flex">
        <form action="/aceitar" method="post">
            @csrf
            <input type="submit" name="accept" class="btn btn-success" value="Aceitar">
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <form action="/negar" method="post">
            @csrf
            <input type="submit" name="deny" class="btn btn-danger" value="Negar">
        </form>
    </div>
</div>

@endsection
