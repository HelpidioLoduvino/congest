@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font white-text">Reserva</h4>
<div class="condo-separator"></div>
@if (!empty($booking))
<div class="card card-body shadow-card mt-3" style="background-color: goldenrod; color: white;">
<h5>Assunto: <strong>{{$booking->subject}}</strong></h5>
<h5>Data De Reserva: <strong>{{$booking->booking_date}}</strong></h5>
<p>{{$booking->booking}}</p>
<small class="text-muted">Data De Envio: {{$booking->booking_date}}</small>
</div>

@if(trim($booking->status) === trim("Aguardando"))
<div class="d-flex justify-content-center mt-3">
    <div class="d-flex">
        <form action="/aceitar-reserva" method="post">
            @csrf
            <input type="hidden" name="booking_id" value="{{$booking->id}}">
            <input type="hidden" name="status" value="{{$booking->status}}">
            <input type="hidden" name="user_id" value="{{session('id')}}">
            <input type="submit" class="btn btn-success" value="Aceitar">
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <form action="/negar-reserva" method="post">
            @csrf
            <input type="hidden" name="booking_id" value="{{$booking->id}}">
            <input type="hidden" name="status" value="{{$booking->status}}">
            <input type="hidden" name="user_id" value="{{session('id')}}">
            <input type="submit" class="btn btn-danger" value="Negar">
        </form>
    </div>
</div>
@endif
@endif
@endsection
