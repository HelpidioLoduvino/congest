@extends('main_admin')

@section('content')
<form action="/cadastrar-condominio-contracto-pessoal" method="post">
    @csrf
    <div class="condo-font card card-body shadow-card mt-3">
        <div class="d-flex justify-content-center">
            <span class="logotipo">
                <img src="{{ asset('/icon/logo.svg') }}" width="40">

            </span>
        </div>
        <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
        <h6 class="d-flex justify-content-center mb-5"><strong>FICHA DE CADASTRO DE CONDOMÍNIO</strong></h6>
        <div class="row">
            <input type="hidden" name="type" value="condominio">
            <input type="hidden" name="contract_type" value="Pessoal">
            <h6 class="mt-5"><strong>DADOS PESSOAIS</strong></h6>
            <div class="form-separator mb-3"></div>

            <div class="col-md-6 mb-3">
                <h6>NOME COMPLETO</h6>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <h6>BILHETE DE IDENTIDADE</h6>
                <input type="text" name="bi" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <h6>DATA DE NASCIMENTO</h6>
                <input type="date" name="birthday" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <h6>GÉNERO</h6>
                <select class="form-control" name="gender">
                    <option value="">--Escolher--</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <h6>NACIONALIDADE</h6>
                <select class="form-control" name="nationality">
                    <option value="">--Escolher--</option>
                    <option value="Angolana">Angolana</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <h6>MORADA</h6>
                <input type="text" name="address" class="form-control">
            </div>

            <h6><strong>CONTATOS</strong></h6>
            <div class="form-separator mb-3"></div>

            <div class="col-md-6 mb-3">
                <h6>TELEFONE</h6>
                <input type="tel" class="form-control" id="contact" name="contact">
            </div>

            <div class="col-md-6 mb-3">
                <h6>EMAIL</h6>
                <input type="email" name="email" class="form-control">
            </div>

            <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
            <div class="form-separator mb-3"></div>

            <div class="col-md-6 mb-3">
                <h6>NOME DO CONDOMÍNIO</h6>
                <input type="text" name="condo_name" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <h6>LOCALIZAÇÃO</h6>
                <input type="text" name="condo_address" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <h6>LOTES</h6>
                <input type="number" name="plot" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <h6>RESIDÊNCIAS</h6>
                <input type="number" name="residency" class="form-control">
            </div>

            <h6><strong>DADOS DO CONTRATO</strong></h6>
            <div class="form-separator mb-3"></div>

            <div class="col-md-6 mb-3">
                <h6>PLANO DO CONTRATO</h6>
                <select name="plan" class="form-control">
                    <option>--Escolher--</option>
                    <option value="Semestral">Semestral</option>
                    <option value="Anual">Anual</option>
                </select>
            </div>
        </div>
    </div>

    <span class="d-flex justify-content-center">
        <input type="submit" class="btn btn-warning mt-3" value="Cadastrar">
    </span>
</form>
@endsection
