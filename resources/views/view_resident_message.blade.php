@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font white-text">Mensagem</h4>
<div class="condo-separator"></div>
@if (!empty($message))
<div class="card card-body shadow-card mt-3" style="background-color: goldenrod; color: white;">
<h5>Assunto: <strong>{{$message->subject}}</strong></h5>
<p>{{$message->message}}</p>
<small class="text-muted">Data De Envio: {{$message->date}}</small>
</div>

@if(trim($message->status) !== trim("Respondido"))
<p class="d-flex justify-content-center mt-3">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
        Responder
    </button>
</p>
<div class="d-flex justify-content-center" style="min-height: 120px;">
    <div class="collapse collapse-horizontal" id="collapseWidthExample">
        <form action="/responder-mensagem" method="post">
            @csrf
            <input type="hidden" name="status" value="{{$message->status}}">
            <input type="hidden" name="message_id" value="{{$message->id}}">
            <input type="hidden" name="condo_id" value="{{$message->condo_id}}">
            <input type="hidden" name="user_id" value="{{session('id')}}">
            <textarea name="feedback" cols="50" rows="5" class="mb-2"> </textarea><br>

            <span class="d-flex justify-content-center">
                <input type="submit" class="btn btn-dark" value="Enviar">
            </span>
        </form>
    </div>
</div>
@endif
@endif
@endsection
