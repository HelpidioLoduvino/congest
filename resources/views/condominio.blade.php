@extends('main_condominio')

@section('content')
@if (!empty($owner))
<div class="card card-body shadow-card mt-3" style="background-color: rgba(188, 188, 188, 0.203)">
    <h5 class="d-flex justify-content-center condo-title">Condomínio {{$owner->condo_name}}</h5>
<div class="row mt-3">
    <div class="col-md-4 mb-3">
        <div class="condo-font card mx-auto shadow-card" style="width: 17rem; background-color: rgba(255, 0, 0, 0.302);">
            <div class="card-body">
                <h5 class="d-flex justify-content-center"><strong>Casas Ocupadas</strong></h5>
                <p class="d-flex justify-content-center">{{$owner->occupied}}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="condo-font card mx-auto shadow-card" style="width: 17rem; background-color: rgba(0, 128, 0, 0.322);">
            <div class="card-body">
                <h5 class="d-flex justify-content-center"><strong>Casas Disponíveis</strong></h5>
                <p class="d-flex justify-content-center">{{$owner->available}}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="condo-font card mx-auto shadow-card" style="width: 17rem; background-color:rgba(205, 134, 63, 0.28)">
            <div class="card-body">
                <h5 class="d-flex justify-content-center"><strong>Proprietário</strong></h5>
                <p class="d-flex justify-content-center">{{$owner->name}}</p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="condo-font card card-body card-highlight shadow-card " style="background-color: rgba(255, 255, 0, 0.311);">
    <h5 class=""><strong>Destaques</strong></h5>
    <p class="text-muted">Atividades importantes em seu condomínio</p>
</div>
@endif
@endsection
