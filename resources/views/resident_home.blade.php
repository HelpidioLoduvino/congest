@extends('main_resident')

@section('content')

@if (!empty($resident))
<div class="card card-body shadow-card mt-3" style="background-color: rgb(93, 0, 0);">
    <h6 class="d-flex justify-content-center condo-title" style="color: white">Condomínio {{$resident->condo_name}}</h6>
</div>
@endif
<h4 class="title-font mt-3 white-text">Avisos</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3" style="background-color:rgb(255, 245, 225);">
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

<h4 class="title-font mt-3 white-text">Reuniões</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3" style="background-color:rgb(255, 245, 225);">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th style="background-color: goldenrod; color:white;">Assunto</th>
                    <th style="background-color: goldenrod; color:white;">Local</th>
                    <th style="background-color: goldenrod; color:white;">Data</th>
                </tr>
            </thead>
            <tbody>
                @if ($meetings->isNotEmpty())
                    @foreach ($meetings as $meeting)
                        <tr>
                            <td style="background-color:rgb(255, 245, 225);">{{$meeting->subject}}</td>
                            <td style="background-color:rgb(255, 245, 225);">{{$meeting->place}}</td>
                            <td style="background-color:rgb(255, 245, 225);">{{$meeting->meeting_date}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<h4 class="title-font mt-3 white-text">Correspondências</h4>
<div class="condo-separator"></div>

<div class="condo-font card card-body shadow-card mt-3" style="background-color:rgb(255, 245, 225);">

    <h5 class="title-font">Reservas</h5>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <th style="background-color: goldenrod; color:white;">Assunto</th>
                <th style="background-color: goldenrod; color:white;">Estado</th>
            </thead>
            <tbody>
                @if (!empty($bookings))
                    @foreach ($bookings as $booking)
                        @if (trim($booking->status) !== trim("Aguardando"))
                            <tr>
                                <td style="background-color:rgb(255, 245, 225);">{{$booking->subject}}</td>
                                <td style="background-color:rgb(255, 245, 225);">{{$booking->status}}</td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="condo-font card card-body shadow-card mt-3" style="background-color:rgb(255, 245, 225);">
    <h5 class="title-font">Mensagens</h5>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <th style="background-color: goldenrod; color:white;">Assunto</th>
                <th style="background-color: goldenrod; color:white;">Resposta</th>
            </thead>
            <tbody>
                @if (!empty($message_feedback))
                    @foreach ($message_feedback as $feedback)
                        <tr>
                            <td style="background-color:rgb(255, 245, 225);">{{$feedback->subject}}</td>
                            <td style="background-color:rgb(255, 245, 225);">{{$feedback->feedback}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
