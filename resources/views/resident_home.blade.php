@extends('main_resident')

@section('content')

@if (!empty($resident))

<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Home</h4>
        <div class="vertical-separator mt-5"></div>
        <div class="d-flex mt-5">
            <span>

                <span style="color: #0042aa; margin-left: 10px;">
                    @php
                    setlocale(LC_TIME, 'pt_BR');
                    echo strftime('%A');
                @endphp,
                </span>

                @php
                    echo date('d')
                @endphp,

                @php
                setlocale(LC_TIME, 'pt_BR');
                echo strftime('%B');
                @endphp,

                <span style="margin-right: 10px;">
                    @php
                    echo date('Y')
                 @endphp

                </span>
            </span>
        </div>
    </nav>
    <div style="overflow: auto; overflow-x:hidden; max-height: 500px; margin-right:50px;">
        <div class="condo-banner mt-5">
            <div class="banner-margin">
                <br>
                <h6 class="">Condomínio</h6>
                <h2 class="condo-name uppercase-text">{{$resident->condo_name}}</h2>
                <h6> <small>Seja bem-vindo a ConGest: Plataforma Profissional para Gestão Condominial. Simplificando a admistração do seu condomínio com eficiência e segurança.</small></h6>
            </div>
            <br>
        </div>
        @endif
        <div class="mt-3">
            <div class="d-flex">
                <div class="esphere-green"></div>
                <h4 class="title">Avisos</h4>
            </div>
        </div>
        <div class="condo-font card card-body border-0 mt-3" style="
        margin-left: 50px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
            @if($notices->isNotEmpty())
                <div>
                    <ul style="list-style:circle;">
                        @foreach($notices as $notice)
                            <li style="margin: 10px;">{{ $notice->notice }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
            <div class="container">
                <small class="text-muted">Não tem nenhum aviso.</small>
            </div>
            @endif
        </div>

        <div class="mt-3">
            <div class="d-flex">
                <div class="esphere-green"></div>
                <h4 class="title">Reuniões</h4>
            </div>
        </div>
        <div class="condo-font card card-body border-0 mt-3" style="
        margin-left:50px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
            @if ($meetings->isNotEmpty())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Assunto</th>
                            <th class="text-center">Local</th>
                            <th class="text-center">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($meetings as $meeting)
                            <tr>
                                <td>{{$meeting->subject}}</td>
                                <td>{{$meeting->place}}</td>
                                <td>{{$meeting->meeting_date}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="container">
                <small class="text-muted">Não tem nenhuma reunião marcada.</small>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
