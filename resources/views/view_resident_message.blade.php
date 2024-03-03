@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Mensagem</h4>
<div class="condo-separator"></div>
@if (!empty($message))
<div class="card card-body shadow-card mt-3">
<h5>Assunto: <strong>{{$message->subject}}</strong></h5>
<p>{{$message->message}}</p>
<small class="text-muted">Data De Envio: {{$message->date}}</small>
</div>
@endif

@endsection
