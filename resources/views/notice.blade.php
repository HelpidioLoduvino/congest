@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Avisos</h4>
<div class="condo-separator"></div>
@if (!empty($condoId))

<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong>Enviar Aviso</strong></h5>

    <form action="/enviar-aviso" method="post">
        @csrf
        <input type="hidden" name="condo_id" value="{{$condoId->id}}">
        <input type="hidden" name="user_id" value="{{session('id')}}">
        <div class="form-group mb-3">
            <label for="receiver">Para:</label>
            <select name="receiver" class="form-control">
                <option value="">Escolher</option>
                <option value="Todos do Condomínio">Todos do Condomínio</option>
                <option value="Portaria">Portaria</option>
                <option value="Moradores">Moradores</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <input type="text" name="subject" placeholder="Assunto" class="form-control">
        </div>

        <div class="form-group mb-3">
            <textarea name="notice" class="form-control" cols="50" rows="3" placeholder="Compor"></textarea>
        </div>

        <button class="btn btn-dark" type="submit">Enviar</button>
    </form>
</div>

@endif

<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong>Avisos</strong></h5>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-active">
                <tr>
                    <th>Data</th>
                    <th>Assunto</th>
                    <th>Para</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($notices))
                    @foreach ($notices as $notice)
                        <tr>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToViewNotice('{{$notice->id}}')">
                                    {{$notice->date}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToViewNotice('{{$notice->id}}')">
                                    {{$notice->subject}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToViewNotice('{{$notice->id}}')">
                                    {{$notice->receiver}}
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
    function redirectToViewNotice(id) {
        var url = '/aviso/' + id;
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
