@extends('main_condominio')

@section('content')
@if (!empty($owner))
<div class="card card-body shadow-card mt-3" style="background-color: rgb(93, 0, 0);">
    <h1 class="d-flex justify-content-center" style="color: white">Condomínio {{$owner->condo_name}}</h1>
<div class="row mt-3 d-flex justify-content-center">
    <div class="col-md-4 mb-3">
        <div class="condo-font card mx-auto shadow-card" style="width: 17rem; background-color: rgb(0, 0, 0);">
            <div class="card-body">
                <p class="d-flex justify-content-center" style="color: white">Disponível: &nbsp; <strong style="color: rgb(113, 188, 0);"> {{$owner->available}}</strong></p>
                <p class="d-flex justify-content-center" style="color: white">Ocupado: &nbsp; <strong style="color: rgb(255, 37, 37);"> {{$owner->occupied}}</strong></p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="condo-font card mx-auto shadow-card" style="width: 17rem; background-color:rgba(0, 0, 0, 0.797);">
            <div class="card-body">
                <h5 class="d-flex justify-content-center white-text"><strong>Proprietário</strong></h5>
                <h5 class="d-flex justify-content-center" style="color: gold;">{{$owner->name}}</h5>
                <small class="d-flex justify-content-center" style="color: gold;">{{$owner->email}}</small>
            </div>
        </div>
    </div>
</div>
</div>
<div class="condo-font card card-body card-highlight shadow-card " style="background-color: gold">
    <h5 class=""><strong>Destaques</strong></h5>
    <p class="text-muted">Atividades importantes em seu condomínio</p>
</div>
@endif
@endsection
