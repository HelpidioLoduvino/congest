@extends('main_condominio')

@section('content')
@if(!empty($notice))
<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong>Aviso</strong></h5>
    <div class="form-group mb-3">
        <h5>Para: <strong>{{$notice->receiver}}</strong></h5>
    </div>

    <div class="form-group mb-3">
        <h5>Assunto: <strong>{{$notice->subject}}</strong></h5>
    </div>

    <div class="form-group mb-3">
        <p>{{$notice->notice}}</p>
    </div>

    <div class="form-group mb-3 mt-3">
        <p class="text-muted">Data de Envio: {{$notice->date}}</p>
    </div>
</div>
@endif
@endsection
