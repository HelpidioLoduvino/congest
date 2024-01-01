@extends('main_admin')

@section('content')
<div class="condo-font card card-body shadow-card mt-3">
    <div class="d-flex justify-content-center">
        <span class="logotipo">
            <img src="{{ asset('/icon/logo.svg') }}" width="40">

        </span>
    </div>
    <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
    <h6 class="d-flex justify-content-center mb-5"><strong>FICHA DE CADASTRO DE CONDOMÍNIO</strong></h6>
    <form class="row" action="">
        <h6 class="mt-5"><strong>DADOS PESSOAIS</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3">
            <h6>NOME COMPLETO</h6>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <h6>BILHETE DE IDENTIDADE</h6>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <h6>DATA DE NASCIMENTO</h6>
            <input type="date" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <h6>GÉNERO</h6>
            <select class="form-control" name="owner_gender">
                <option value="">--Escolher--</option>
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMININO">FEMININO</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <h6>NACIONALIDADE</h6>
            <select class="form-control" name="owner_nacionality">
                <option value="">--Escolher--</option>
                <option value="MASCULINO">ANGOLA</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <h6>MORADA</h6>
            <input type="text" class="form-control">
        </div>

        <h6><strong>CONTATOS</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3">
            <h6>TELEFONE</h6>
            <input type="number" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <h6>EMAIL</h6>
            <input type="email" class="form-control">
        </div>

        <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3">
            <h6>NOME DO CONDOMÍNIO</h6>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
            <h6>TÍTULO DE PROPRIEDADE</h6>
            <input type="file" class="form-control" accept=".pdf">
            <p><small class="text-muted">Ficheiro Aceite: pdf</small></p>
        </div>

        <div class="col-md-6 mb-3">
            <h6>LOCALIZAÇÃO</h6>
            <input type="number" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <h6>NIF</h6>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <h6>LOTES</h6>
            <input type="number" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <h6>RESIDÊNCIAS</h6>
            <input type="number" class="form-control">
        </div>

        <h6><strong>DADOS DO CONTRATO</strong></h6>
        <div class="form-separator mb-3"></div>

        <div class="col-md-6 mb-3">
            <h6>PLANO DO CONTRATO</h6>
            <select name="" class="form-control">
                <option>--Escolher--</option>
                <option value="SEMESTRAL">SEMESTRAL</option>
                <option value="ANUAL">ANUAL</option>
            </select>
        </div>

    </form>
</div>

@endsection
