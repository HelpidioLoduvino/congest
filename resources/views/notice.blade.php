@extends('main_condominio')

@section('content')
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Aviso</h4>
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

    <div style="overflow: auto; overflow-x:hidden; max-height: 500px;">
        <div class="mt-5">
            <div class="d-flex">
                <div class="esphere-blue" style="margin-left: 50px;"></div>
                <h4 class="title">Fazer aviso</h4>
            </div>

            <div class="card card-body border-0 mt-3" style="
            margin-left: 50px;
            margin-right: 50px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">

                <form action="/enviar-aviso" method="post">
                    @csrf
                    <input type="hidden" name="condo_id" value="{{$condoId->id}}">
                    <input type="hidden" name="user_id" value="{{session('id')}}">
                    <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
                    <div class="form-group mb-3">
                        <input type="text" name="subject" placeholder="Assunto" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <textarea name="notice" class="form-control" cols="50" rows="3" placeholder="Compor"></textarea>
                    </div>
                    <span class="d-flex justify-content-center">
                        <button class="btn btn-dark" type="submit">Enviar</button>
                    </span>
                </form>
            </div>
            <div class="mt-3">
                <div class="d-flex">
                    <div class="esphere-green"></div>
                    <h4 class="title">Meus avisos</h4>
                </div>
            </div>
            <div class="table-responsive" style="margin-left: 50px; margin-right: 50px;">
                <table class="table">
                    <thead class="table-active">
                        <tr>
                            <th class="text-center">Assunto</th>
                            <th class="text-center">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($notices))
                            @foreach ($notices as $notice)
                                <tr>
                                    <td>
                                        <a class="nav-link" href="#" onclick="redirectToViewNotice('{{$notice->id}}', '{{session('id')}}')">
                                            {{$notice->subject}}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="nav-link" href="#" onclick="redirectToViewNotice('{{$notice->id}}', '{{session('id')}}')">
                                            {{$notice->date}}
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
    </div>
</div>

<script>
    function redirectToViewNotice(id, ownerId) {
        var url = '/aviso/' + id + '/' + ownerId;
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
