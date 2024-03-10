@extends('main_condominio')

@section('content')
    <div class="mt-5">
        <div class="d-flex justify-content-end">
            <form action="/pesquisar-morador/{resident_name}" method="get">
                <div class="d-flex">
                    <input id="resident_name" name="resident_name" class="search-bar form-control me-2" type="text" placeholder="Procurar morador"
                    aria-label="Search" style="background-color:rgb(255, 245, 225);">
                    <input type="image" class="btn btn-warning" src="{{ asset('/icon/search.svg') }}" alt="" width="50">
                </div>
            </form>
        </div>
        <div id="suggestions">

        </div>
    </div>
    <h4 class="mt-3 title-font white-text">Cadastrar Morador</h4>
    <div class="condo-separator"></div>
    <div class="condo-font card card-body shadow-card mt-3" style="background-color: goldenrod; color: white;">
        <div class="d-flex justify-content-center">
            <span class="logotipo">
                <img src="{{ asset('/icon/logo.svg') }}" width="40">

            </span>
        </div>
        <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
        <h6 class="d-flex justify-content-center mb-3"><strong>FICHA DE CADASTRO DE MORADOR</strong></h6>
        <div class="d-flex justify-content-center">
            <a class="btn btn-dark" href="/cadastrar-morador/{{session('id')}}">
                Cadastrar
            </a>
        </div>
    </div>
    <h4 class="mt-3 title-font white-text">Moradores</h4>
    <div class="condo-separator"></div>

    <div class="condo-font card card-body shadow-card mt-3" style="background-color: goldenrod; color: white;">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="background-color:rgb(255, 245, 225);">LOTE</th>
                        <th style="background-color:rgb(255, 245, 225);">Nº DA RESIDÊNCIA</th>
                        <th style="background-color:rgb(255, 245, 225);">MORADOR</th>
                    </tr>
                </thead>
                @if (!empty($residents))
                <tbody>
                    @foreach ($residents as $resident)
                    <tr>
                        <td class="uppercase-text" style="background-color: goldenrod; color: white;">
                            <a class="nav-link" href="#" onclick="redirectToResidentForm('{{$resident->resident_id}}')">
                                {{$resident->plot_resident}}
                            </a>
                        </td>
                        <td style="background-color: goldenrod; color: white;">
                            <a class="nav-link" href="#" onclick="redirectToResidentForm('{{$resident->resident_id}}')">
                                {{$resident->residency_number}}
                            </a>
                        </td>
                        <td style="background-color: goldenrod; color: white;">
                            <a class="nav-link" href="#" onclick="redirectToResidentForm('{{$resident->resident_id}}')">
                                {{$resident->name}}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @endif
            </table>
        </div>
    </div>
    <div id="pagination-container" class="mt-3">
        <!-- Botões de paginação serão inseridos aqui -->
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
