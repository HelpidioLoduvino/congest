@extends('main_admin')

@section('content')
    <div class="condo-font card card-body shadow-card mt-3">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-active">
                    <tr>
                        <th>Nome Do Condomínio</th>
                        <th>Tipo de Contrato</th>
                        <th>Data Do Contrato</th>
                        <th>Plano Do Contrato</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($condo_business_contracts))
                        @foreach ($condo_business_contracts as $condo_business)
                        <tr>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}')">
                                    {{$condo_business->condo_name}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}')">
                                    {{$condo_business->contract_type}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}')">
                                    {{$condo_business->date}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToBusinessContract('{{$condo_business->user_id }}')">
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
                                <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}')">
                                    {{ $condo_personal->condo_name }}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}')">
                                {{ $condo_personal->contract_type }}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}')">
                                    {{ $condo_personal->date }}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToPersonalContract('{{ $condo_personal->user_id }}')">
                                    {{ $condo_personal->plan }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div id="pagination-container" class="mt-3">
        <!-- Botões de paginação serão inseridos aqui -->
    </div>

    <script>
        function redirectToPersonalContract(userId) {
            var url = '/contracto-pessoal/' + userId;
            window.location.href = url;
        }
    </script>

    <script>
        function redirectToBusinessContract(userId) {
            var url = '/contracto-empresa/' + userId;
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
