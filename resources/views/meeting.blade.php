@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font white-text">Reuniões</h4>
<div class="condo-separator"></div>
@if (!empty($condoId))
<div class="condo-font card card-body shadow-card mt-3" style="background-color: goldenrod; color: white;">
    <h5 class="d-flex justify-content-center mb-3"><strong>Marcar Reunião</strong></h5>
    <form action="/marcar-reunião" method="post">
        @csrf
        <input type="hidden" name="condo_id" value="{{$condoId->id}}">
        <input type="hidden" name="user_id" value="{{session('id')}}">
        <div class="form-group mb-3">
            <label for="">Data:</label>
            <input type="datetime-local"  name="meeting_date" class="form-control" style="background-color:rgb(255, 245, 225);">
        </div>

        <div class="form-group mb-3">
            <select name="place" class="form-control" style="background-color:rgb(255, 245, 225);">
                <option value="">-- Escolher Local --</option>
                <option value="Parque do Condominio">Parque do Condominio</option>
                <option value="Google Meeting">Google Meeting</option>
                <option value="Moradores">Reunião Online</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <select name="participant" class="form-control" style="background-color:rgb(255, 245, 225);">
                <option value="">-- Escolher Participantes --</option>
                <option value="Todos do Condomínio">Todos do Condomínio</option>
                <option value="Portaria">Portaria</option>
                <option value="Moradores">Moradores</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <input type="text" name="subject" placeholder="Assunto" class="form-control" style="background-color:rgb(255, 245, 225);">
        </div>
        <span class="d-flex justify-content-center">
            <button class="btn btn-dark" type="submit">Marcar</button>
        </span>
    </form>
</div>

@endif

<div class="condo-font card card-body shadow-card mt-3" style="background-color: goldenrod; color: white;">
    <h5 class="d-flex justify-content-center mb-3"><strong> Reuniões</strong></h5>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="background-color:rgb(255, 245, 225);">Assunto</th>
                    <th style="background-color:rgb(255, 245, 225);">Com</th>
                    <th style="background-color:rgb(255, 245, 225);">Local</th>
                    <th style="background-color:rgb(255, 245, 225);">Data</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($meetings))
                    @foreach ($meetings as $meeting)
                        <tr>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToViewMeeting('{{$meeting->id}}')">
                                    {{$meeting->subject}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToViewMeeting('{{$meeting->id}}')">
                                    {{$meeting->participant}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToViewMeeting('{{$meeting->id}}')">
                                    {{$meeting->place}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToViewMeeting('{{$meeting->id}}')">
                                    {{$meeting->meeting_date}}
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
    function redirectToViewMeeting(id) {
        var url = '/reunião/' + id;
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
