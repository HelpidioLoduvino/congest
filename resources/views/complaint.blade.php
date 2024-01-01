@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Reclamações</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Morador</th>
                    <th>Bloco</th>
                    <th>nº Casa</th>
                    <th>Assunto</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody id="clickableBody">
                <tr>
                    <td>Johelsa Mateus</td>
                    <td>B</td>
                    <td>25</td>
                    <td>Barulho na Vizinhança</td>
                    <td>10/5/2023, 12:30</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
document.getElementById('clickableBody').addEventListener('click', function() {
    window.location.href = '/reclamação';
});
</script>



@endsection
