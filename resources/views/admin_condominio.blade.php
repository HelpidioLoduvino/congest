@extends('main_admin')

@section('content')
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Condomínios</h4>
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
        <div class="collapse navbar-collapse d-md-flex justify-content-end mt-5">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right:50px;">
                    <div>
                        <form class="d-flex" role="search">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: #f5f5f5; height:30px; width:26vh;">
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

    <div style = "overflow:auto; overflow-x:hidden; max-height: 500px;">
        <div class="mt-5">
            <div class="d-flex">
                <div class="esphere-blue" style="margin-left: 50px;"></div>
                <h4 class="title">Cadastrar condomínio</h4>
            </div>
        </div>

        <div class="container">
            <div class="card card-body border-0" style="
                margin-left: 50px;
                margin-right: 50px;
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">

                <div class="container">
                    <div class="d-flex justify-content-center">
                        <span class="logotipo">
                            <img src="{{ asset('/icon/logo.svg') }}" width="40">

                        </span>
                    </div>
                    <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
                    <h6 class="d-flex justify-content-center mb-5"><strong>FICHA DE CADASTRO DE CONDOMÍNIO</strong></h6>
                    <div class="dropdown d-flex justify-content-center mb-3">
                        <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TIPO DE CONTRATO
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/pessoal">PESSOAL</a></li>
                          <li><a class="dropdown-item" href="/empresarial">EMPRESA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="d-flex">
                <div class="esphere-green" style="margin-left: 50px;"></div>
                <h4 class="title">Condomínios</h4>
            </div>
        </div>

        <div class="table-responsive" style="margin-left: 50px; margin-right:50px;">
            <table class="table table-hover" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
                <thead class="table-active">
                    <tr>
                        <th class="text-center">Nome Do Condomínio</th>
                        <th class="text-center">Tipo de Contrato</th>
                        <th class="text-center">Data Do Contrato</th>
                        <th class="text-center">Plano Do Contrato</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($condo_business_contracts))
                    @foreach ($condo_business_contracts as $condo_business)
                    <tr>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}', '{{session('id')}}')">
                                {{$condo_business->condo_name}}
                            </a>
                        </td>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}', '{{session('id')}}')">
                                {{$condo_business->contract_type}}
                            </a>
                        </td>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}', '{{session('id')}}')">
                                {{$condo_business->date}}
                            </a>
                        </td>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}', '{{session('id')}}')">
                                {{$condo_business->plan}}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @endif

                @if (!empty($condo_personal_contracts))
                @foreach ($condo_personal_contracts as $condo_personal)
                    <tr>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}', '{{session('id')}}')">
                                {{ $condo_personal->condo_name }}
                            </a>
                        </td>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}', '{{session('id')}}')">
                            {{ $condo_personal->contract_type }}
                            </a>
                        </td>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}', '{{session('id')}}')">
                                {{ $condo_personal->date }}
                            </a>
                        </td>
                        <td>
                            <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}', '{{session('id')}}')">
                                {{ $condo_personal->plan }}
                            </a>
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div id="pagination-container">
            <!-- Botões de paginação serão inseridos aqui -->
        </div>
    </div>
</div>

    <script>
        function redirectToPersonalContract(userId, adminId) {
            var url = '/contracto-pessoal/' + userId + '/' + adminId;
            window.location.href = url;
        }
    </script>

    <script>
        function redirectToBusinessContract(userId, adminId) {
            var url = '/contracto-empresa/' + userId + '/' + adminId;
            window.location.href = url;
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.querySelector('.table');
            const rows = Array.from(table.querySelectorAll('tbody tr'));
            const rowsPerPage = 5; // Defina o número de linhas por página
            const pageCount = Math.ceil(rows.length / rowsPerPage);

            // Função para mostrar as linhas corretas com base na página atual
            function showPage(page) {
                const start = (page - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                rows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? '' : 'none';
                });
            }

            // Cria os botões de paginação
            for (let i = 1; i <= pageCount; i++) {
                const btn = document.createElement('button');
                btn.innerText = i;
                btn.addEventListener('click', function() {
                    showPage(i);
                });
                document.getElementById('pagination-container').appendChild(btn);
            }

            // Mostra a primeira página por padrão
            showPage(1);
        });
    </script>
@endsection
