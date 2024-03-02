@extends('main_condominio')

@section('content')
@if(!empty($meeting))
<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong>Aviso</strong></h5>
    <div class="form-group mb-3">
        <h5>Para: <strong>{{$meeting->participant}}</strong></h5>
    </div>

    <div class="form-group mb-3">
        <h5>Assunto: <strong>{{$meeting->subject}}</strong></h5>
    </div>

    <div class="form-group mb-3">
        <h5>Local: <strong>{{$meeting->place}}</strong></h5>
    </div>

    <div class="form-group mb-3">
        <h5>Data da Reunião: <strong>{{$meeting->meeting_date}}</strong></h5>
    </div>

    <div class="form-group mb-3 mt-3">
        <p class="text-muted">Data: {{$meeting->date}}</p>
    </div>
</div>
@endif
@endsection
