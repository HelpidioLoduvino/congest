@extends('main_resident')

@section('content')

@if (!empty($resident))
<div class="card card-body shadow-card mt-3" style="background-color: rgb(24, 24, 220)">
    <h6 class="d-flex justify-content-center condo-title" style="color: white">Condomínio {{$resident->condo_name}}</h6>
</div>
@endif
<h4 class="title-font mt-3">Avisos</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    @if($notices->isNotEmpty())
        <div>
            <ul>
                @foreach($notices as $notice)
                    <li>{{ $notice->notice }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<h4 class="title-font mt-3">Reuniões</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <div class="table-responsive">
        <table class="table">
            <thead class="table-active">
                <tr>
                    <th>Assunto</th>
                    <th>Local</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @if ($meetings->isNotEmpty())
                    @foreach ($meetings as $meeting)
                        <tr>
                            <td>{{$meeting->subject}}</td>
                            <td>{{$meeting->place}}</td>
                            <td>{{$meeting->meeting_date}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<h4 class="title-font mt-3">Correspondências</h4>
<div class="condo-separator"></div>

<div class="condo-font card card-body shadow-card mt-3">

    <h5 class="title-font">Reservas</h5>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-active">
                <th>Assunto</th>
                <th>Estado</th>
            </thead>
            <tbody>
                @if (!empty($bookings))
                    @foreach ($bookings as $booking)
                        @if (trim($booking->status) !== trim("Aguardando"))
                            <tr>
                                <td>{{$booking->subject}}</td>
                                <td>{{$booking->status}}</td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="title-font">Mensagens</h5>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-active">
                <th>Assunto</th>
                <th>Resposta</th>
            </thead>
            <tbody>
                @if (!empty($message_feedback))
                    @foreach ($message_feedback as $feedback)
                        <tr>
                            <td>{{$feedback->subject}}</td>
                            <td>{{$feedback->feedback}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
