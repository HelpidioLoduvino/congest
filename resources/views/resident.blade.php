@extends('main_condominio')

@section('content')

<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Moradores</h4>
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
                                <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: #f5f5f5ba; height:30px; width:26vh;">
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
    <div style="overflow:auto; overflow-x:hidden; max-height:500px;">
        <div class="mt-5">
            <div class="d-flex">
                <div class="esphere-blue" style="margin-left: 50px;"></div>
                <h4 class="title">Cadastrar morador</h4>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card border-0" style="
                margin-left:50px;
                margin-right:50px;
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <span class="logotipo">
                            <img src="{{ asset('/icon/logo.svg') }}" width="40">

                        </span>
                    </div>
                    <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
                    <h6 class="d-flex justify-content-center mb-3"><strong>FICHA DE CADASTRO DE MORADOR</strong></h6>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-warning" style="color: white;" href="/cadastrar-morador/{{session('id')}}">
                            Cadastrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="d-flex">
                <div class="esphere-green"></div>
                <h4 class="title">Tabela dos moradores</h4>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive" style="
                margin-left:50px;
                margin-right:50px;">
                <table class="table table-hover" style="
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                font-family: 'Poppins', sans-serif;">
                    <thead class="table-active">
                        <tr>
                            <th class="text-center">Morador</th>
                            <th class="text-center">Lote</th>
                            <th class="text-center">Residência</th>
                            <th class="text-center">Gênero</th>
                        </tr>
                    </thead>
                    @if (!empty($residents))
                    <tbody>
                        @foreach ($residents as $resident)
                        <tr>
                            <td class="uppercase-text">
                                <a class="nav-link" href="#" onclick="redirectToResidentForm('{{$resident->resident_id}}')">
                                    {{$resident->name}}
                                </a>
                            </td>
                            <td class="uppercase-text">
                                <a class="nav-link" href="#" onclick="redirectToResidentForm('{{$resident->resident_id}}')">
                                    {{$resident->plot_resident}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToResidentForm('{{$resident->resident_id}}')">
                                    {{$resident->residency_number}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToResidentForm('{{$resident->resident_id}}')">
                                    {{$resident->gender}}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
            </div>
            <div id="pagination-container">
                <!-- Botões de paginação serão inseridos aqui -->
            </div>
        </div>
    </div>
</div>

    <script>
        function redirectToResidentForm(residentId) {
            var url = '/contracto-morador/' + residentId;
            window.location.href = url;
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.querySelector('.table');
            const rows = Array.from(table.querySelectorAll('tbody tr'));
            const rowsPerPage = 3; // Defina o número de linhas por página
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
