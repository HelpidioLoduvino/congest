@extends('main_resident')

@section('content')
<br>
<div class="card card-body shadow-card " style="background-color: rgba(245, 222, 179, 0.292)">
    <h6 class="d-flex justify-content-center condo-title">Condomínio da Sonangol</h6>
</div>

<h4 class="title-font mt-3">Avisos</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Mensagem</th>
                    <th>De</th>
                    <th>Para</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<h4 class="title-font mt-3">Reuniões</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Assunto</th>
                    <th>Com</th>
                    <th>Local</th>
                    <th>Data</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
