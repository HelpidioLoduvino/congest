@extends('main_resident')

@section('content')

@if (!empty($resident))
<div class="card card-body shadow-card mt-3" style="background-color: rgba(245, 222, 179, 0.292)">
    <h6 class="d-flex justify-content-center condo-title">Condomínio {{$resident->condo_name}}</h6>
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
            <thead>
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
@endsection
