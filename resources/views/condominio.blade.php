@extends('main_condominio')

@section('content')
@if (!empty($owner))
<div class="my-card d-md-block d-none mt-3">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Home</h4>
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
        <div class="collapse navbar-collapse d-md-flex justify-content-end mt-5">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right:50px;">
                    <div>
                        <form class="d-flex" role="search">
                            <div class="input-group">
                                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: #ebebeb; height:30px; width:26vh;">
                                <button class="btn btn-primary" type="submit" style="height: 30px;">
                                    <img src="{{asset('icon/search.svg')}}" width="20" style="margin-bottom: 20px;">
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @if(session('msg'))
    <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
        <p class="msg d-flex justify-content-center">{{session('msg')}}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row mt-5">
        <div class="col-md-8">
            <div class="condo-banner">
                <div class="banner-margin">
                    <br>
                    <h6 class="">Condomínio</h6>
                    <h2 class="condo-name uppercase-text">{{$owner->condo_name}}</h2>
                    <h6> <small>Seja bem-vindo a ConGest: Plataforma Profissional para Gestão Condominial. Simplificando a admistração do seu condomínio com eficiência e segurança.</small></h6>
                    <a href="#" class="btn btn-warning" style="color: white;">Ver mais...</a>
                </div>
                <br>
            </div>
            <div class="mt-3">
                <div class="d-flex">
                    <div class="esphere-green"></div>
                    <h4 class="title">Destaques</h4>
                </div>
            </div>
            <div class="highlight-card" style="overflow: auto; max-height: 200px;">
                <div class="container mt-2">
                    <div class="my-div-card mb-2">
                        <div class="d-flex" style="margin-left: 20px;">
                            <img src="{{asset('icon/user.svg')}}" alt="" width="30">
                            <table class="highlight-table paragraph">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Espaço</th>
                                        <th>Quando</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Helpidio Mateus</td>
                                        <td>Piscina</td>
                                        <td>10/02/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="my-div-card mb-2">
                        <div class="d-flex" style="margin-left: 20px;">
                            <img src="{{asset('icon/user.svg')}}" alt="" width="30">
                            <table class="highlight-table paragraph">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Espaço</th>
                                        <th>Quando</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Helpidio Mateus</td>
                                        <td>Piscina</td>
                                        <td>10/02/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="my-div-card mb-2">
                        <div class="d-flex" style="margin-left: 20px;">
                            <img src="{{asset('icon/user.svg')}}" alt="" width="30">
                            <table class="highlight-table paragraph">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Espaço</th>
                                        <th>Quando</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Helpidio Mateus</td>
                                        <td>Piscina</td>
                                        <td>10/02/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-3">
            <h5 class="title" style="color: orange;">Calendário</h5>
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

            <div class="d-flex mt-4">
                <div class="esphere-blue"></div>
                <h5 class="title"> Casas Ocupadas</h5>
            </div>

            <div class="occupied-house-card">
                <img src="{{asset('icon/home.svg')}}" style="margin-left: 10px; margin-top:5px; margin-bottom: 5px;" width="40">
                <small class="paragraph" style="color: white;">casas: {{$owner->available}}</small>
                <span class="house-details">{{$owner->occupied}}</span>
            </div>

            <div class="d-flex mt-4">
                <div class="esphere-blue"></div>
                <h5 class="title">Casas Disponíveis</h5>
            </div>

            <div class="available-house-card">
                <img src="{{asset('icon/home.svg')}}" style="margin-left: 10px; margin-top:5px; margin-bottom: 5px;" width="40">
                <small class="paragraph" style="color: white;">casas: {{$owner->available}}</small>
                <span class="house-details">{{$owner->available}}</span>
            </div>
        </div>
    </div>
</div>

<div class="my-card d-md-none d-block mt-3">
    <ul class="mobile-navbar mb-5">
        <li><h5 class="condo-title mt-5" style="margin-left: 20px;">Home</h5></li>
        <li><div class="vertical-separator-mobile mt-5"></div></li>
        <li>
            <div class="d-flex calendar-background-mobile" style="margin-top: 53px;">
                <span >

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
        </li>
    </ul>

    <div class="d-flex justify-content-center">
        <form class="d-flex" role="search">
            <div class="input-group">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: #ebebeb; height:30px;">
                <button class="btn btn-primary" type="submit" style="height: 30px;">
                    <img src="{{asset('icon/search.svg')}}" width="20" style="margin-bottom: 20px;">
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="condo-banner-mobile  mt-3">
            <div class="banner-margin">
                <br>
                <h6 class="">Condomínio</h6>
                <h2 class="condo-name uppercase-text">{{$owner->condo_name}}</h2>
                <h6> <small>Seja bem-vindo a ConGest: Plataforma Profissional para Gestaõ Condominial. Simplificando a admistração do seu condomínio com eficiência e segurança.</small></h6>
                <a href="#" class="btn btn-warning" style="color: white;">Ver mais...</a>
            </div>
            <br>
        </div>
    </div>
    <div class="d-flex mt-3">
        <div class="esphere-green-mobile"></div>
        <h4 class="title">Destaques</h4>
    </div>

    <div class="container">
        <div class="highlight-card-mobile" style="overflow: auto; max-height: 200px;">
            <div class="container mt-2">
                <div class="my-div-card mb-2">
                    <div class="d-flex" style="margin-left: 20px;">
                        <img src="{{asset('icon/user.svg')}}" alt="" width="30">
                        <table class="highlight-table paragraph">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Espaço</th>
                                    <th>Quando</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Helpidio Mateus</td>
                                    <td>Piscina</td>
                                    <td>10/02/2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="my-div-card mb-2">
                    <div class="d-flex" style="margin-left: 20px;">
                        <img src="{{asset('icon/user.svg')}}" alt="" width="30">
                        <table class="highlight-table paragraph">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Espaço</th>
                                    <th>Quando</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Helpidio Mateus</td>
                                    <td>Piscina</td>
                                    <td>10/02/2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endif

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
