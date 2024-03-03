@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Reclamação</h4>
<div class="condo-separator"></div>
@if (!empty($complaint))
<div class="card card-body shadow-card mt-3">
<h5>Assunto: <strong>{{$complaint->subject}}</strong></h5>
<p>{{$complaint->complaint}}</p>
<small class="text-muted">Data De Envio: {{$complaint->date}}</small>
</div>
@endif
@endsection
