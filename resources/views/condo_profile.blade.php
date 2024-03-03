@extends('main_condominio')

@section('content')
@if(!empty($condominio))
<div class="card card-body shadow-card mt-3">
    <div class="d-flex justify-content-center">
        <span class="logotipo">
            <img src="{{ asset('/icon/logo.svg') }}" width="40">

        </span>
    </div>
    <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
    <h6 class="d-flex justify-content-center mb-5"><strong>CONTRATO DO CONDOMÍNIO</strong></h6>
    <div class="row">
        <h6><strong>DADOS PESSOAIS</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>NOME COMPLETO</h6>
            <h5><strong>{{$condominio->name}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>BILHETE DE IDENTIDADE</h6>
            <h5><strong>{{$condominio->bi}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3">
            <h6>DATA DE NASCIMENTO</h6>
            <h5><strong>{{$condominio->birthday}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>GÉNERO</h6>
            <h5><strong>{{$condominio->gender}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>NACIONALIDADE</h6>
            <h5><strong>{{$condominio->nationality}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>MORADA</h6>
            <h5><strong>{{$condominio->address}}</strong></h5>
        </div>

        <h6><strong>CONTATOS</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3">
            <h6>TELEFONE</h6>
            <h5><strong>{{$condominio->contact}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3">
            <h6>EMAIL</h6>
            <h5><strong>{{$condominio->email}}</strong></h5>
        </div>

        <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>NOME DO CONDOMÍNIO</h6>
            <h5><strong>{{$condominio->condo_name}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>LOCALIZAÇÃO</h6>
            <h5><strong>{{$condominio->condo_address}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3">
            <h6>LOTES</h6>
            <h5><strong>{{$condominio->plot}}</strong></h5>
        </div>

        <div class="col-md-6 mb-3">
            <h6>RESIDÊNCIAS</h6>
            <h5><strong>{{$condominio->residency}}</strong></h5>
        </div>

        <h6><strong>DADOS DO CONTRATO</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3 uppercase-text">
            <h6>PLANO DO CONTRATO</h6>
            <h5><strong>{{$condominio->plan}}</strong></h5>
        </div>
    </div>
</div>
@endif
@endsection
