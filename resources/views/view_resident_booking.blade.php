@extends('main_condominio')

@section('content')
<div class="my-card d-md-block d-none mt-3">
    <div class="row">
        <div class="col-md-8">
            <nav class="navbar navbar-expand-lg">
                <h4 class="condo-title mt-5" style="margin-left: 50px;">Reserva</h4>
                <div class="vertical-separator mt-5"></div>
                <div class="d-flex calendar-background mt-5">
                    <span>

                        <span style="color: goldenrod; margin-left: 10px;">
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
            <div class="mt-5">
                <div class="d-flex">
                    <div class="esphere-green"></div>
                    <h4 class="title">Detalhes da reserva</h4>
                </div>
            </div>
            @if (!empty($booking))
            <div class="highlight-card">
                <div class="container" style="margin-left: 10px;">
                    <br>
                    <h5>Nome do morador: <strong>{{$booking->name}}</strong></h5>
                    <h5 class="uppercase-text">Lote: <strong>{{$booking->plot_resident}}</strong></h5>
                    <h5>Nº da casa: <strong>{{$booking->residency_number}}</strong></h5>
                    <h5>Espaço: <strong>{{$booking->place}}</strong></h5>
                    <h5>Finalidade: <strong>{{$booking->purpose}}</strong></h5>
                    <h5>Data de Reserva: <strong>{{$booking->booking_date}}</strong></h5>
                    <h5>Estado: <strong>{{$booking->status}}</strong></h5>
                    <small class="text-muted">Data de Envio: {{$booking->date}}</small>
                    <br><br>
                </div>
            </div>
            @endif
            @if (trim($booking->status) === trim("Aguardando"))
            <div class="d-flex mt-3" style="margin-left: 50px;">
                <form action="/aceitar-reserva" method="post">
                    @csrf
                    <input type="hidden" name="booking_id" value="{{$booking->id}}">
                    <input type="hidden" name="status" value="{{$booking->status}}">
                    <input type="hidden" name="user_id" value="{{session('id')}}">
                    <input type="submit" class="btn btn-success" value="Aceitar">
                </form>
                &nbsp;&nbsp;
                <form action="/negar-reserva" method="post">
                    @csrf
                    <input type="hidden" name="booking_id" value="{{$booking->id}}">
                    <input type="hidden" name="status" value="{{$booking->status}}">
                    <input type="hidden" name="user_id" value="{{session('id')}}">
                    <input type="submit" class="btn btn-danger" value="Negar">
                </form>
            </div>
            @endif
        </div>
        <div class="col" style="
        background: linear-gradient(to right, #98fde7, #8be7d3);
        margin-right:12px;
        border-top-right-radius: 20px;
        box-shadow: -4px 0px 16px 0px rgba(0,0,0,0.2);
        height:96vh;
        border-bottom-right-radius: 20px;
        ">
            <div class="container">
                <form class="d-flex mt-5" role="search">
                    <div class="input-group mt-3">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: #ebebeb; height:30px; width:25vh;">
                        <button class="btn btn-primary" type="submit" style="height: 30px;">
                            <img src="{{asset('icon/search.svg')}}" width="20" style="margin-bottom: 20px;">
                        </button>
                    </div>
                </form>
                <br><br>
                <h5 class="title mt-3" style="color: orange;">Calendário</h5>
                <span id="currentMonth" class="d-flex justify-content-center"></span>
                <table class="calendar-table mt-3">
                    <thead>
                        <tr>
                            <th>Dom</th>
                            <th>Seg</th>
                            <th>Ter</th>
                            <th>Qua</th>
                            <th>Qui</th>
                            <th>Sext</th>
                            <th>Sáb</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body">
                        <!-- Dias do mês serão adicionados dinamicamente aqui -->
                    </tbody>
                </table>
                <div class="d-flex">
                    <h5 class="title mt-5" style="color: blue;">Histórico</h5>
                    <a class="mt-5" style="margin-left: 120px; cursor: pointer;"><small><u> Ver tudo</u></small></a>
                </div>
            </div>
            <div class="mt-1">
                <small>
                    <div class="col">
                        <ul class="booking-history-list">
                            <li>Helpidio Mateus</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>Salao</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>30/02/2024</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="booking-history-list">
                            <li>Helpidio Mateus</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>Salao</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>30/02/2024</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="booking-history-list">
                            <li>Helpidio Mateus</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>Salao</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>30/02/2024</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="booking-history-list">
                            <li>Helpidio Mateus</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>Salao</li>
                            <li><div class="vertical-green-separator"></div></li>
                            <li>30/02/2024</li>
                        </ul>
                    </div>
                </small>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const calendarBody = document.getElementById("calendar-body");
        const currentMonthDiv = document.getElementById("currentMonth");

        // Obter informações da data atual
        const currentDate = new Date();
        const currentMonth = currentDate.toLocaleString('default', { month: 'long' });
        const currentYear = currentDate.getFullYear();

        // Atualizar o texto do mês na div
        currentMonthDiv.textContent = `${currentMonth} ${currentYear}`;

        // Configurar a data para o primeiro dia do mês
        const firstDayOfMonth = new Date(currentYear, currentDate.getMonth(), 1);

        // Obter o número de dias no mês, considerando se é fevereiro e se é um ano bissexto
        let daysInMonth;
        if (currentDate.getMonth() === 1) {
            daysInMonth = (currentYear % 4 === 0 && currentYear % 100 !== 0) || (currentYear % 400 === 0) ? 29 : 28;
        } else {
            daysInMonth = new Date(currentYear, currentDate.getMonth() + 1, 0).getDate();
        }

        // Preencher dinamicamente os dias do mês na tabela
        let day = 1;
        for (let i = 0; i < 6; i++) {
            const row = document.createElement("tr");

            for (let j = 0; j < 7; j++) {
                const cell = document.createElement("td");

                if (i === 0 && j < firstDayOfMonth.getDay()) {
                    // Células vazias antes do primeiro dia do mês
                    cell.textContent = "";
                } else if (day <= daysInMonth) {
                    cell.textContent = day;
                    if (
                        currentDate.getDate() === day &&
                        currentDate.getMonth() === currentDate.getMonth() &&
                        currentDate.getFullYear() === currentYear
                    ) {
                        // Adiciona a classe "current-day" ao dia atual
                        cell.classList.add("current-day");
                    }
                    day++;
                } else {
                    // Células vazias após o último dia do mês
                    cell.textContent = "";
                }

                row.appendChild(cell);
            }

            calendarBody.appendChild(row);
        }
    });
</script>
@endsection
