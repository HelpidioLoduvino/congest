@extends('main_admin')

@section('content')
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <div style = "overflow:auto; overflow-x:hidden; max-height: 600px; margin-left: 50px; margin-right: 50px;">
        <form action="/cadastrar-condominio-contracto-empresarial" method="post">
            @csrf
            <div class="condo-font card card-body border-0 mt-3">
                <div class="d-flex justify-content-center">
                    <span class="logotipo">
                        <img src="{{ asset('/icon/logo.svg') }}" width="40">

                    </span>
                </div>
                <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
                <h6 class="d-flex justify-content-center mb-5"><strong>FICHA DE CADASTRO DE CONDOMÍNIO</strong></h6>
                <div class="row">
                    <input type="hidden" name="type" value="condominio">
                    <input type="hidden" name="contract_type" value="Empresa">
                    <h6><strong>DADOS DA EMPRESA</strong></h6>
                    <div class="form-separator mb-3"></div>
                    <div class="col-md-6 mb-3">
                        <h6>NOME DA EMPRESA</h6>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <h6>NIF</h6>
                        <input type="text" name="nif" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <h6>LOCALIZAÇÃO</h6>
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
            <span class="d-flex mt-3 justify-content-center">
                <input type="submit" class="btn btn-warning" value="Cadastrar">
            </span>
        </form>
    </div>
</div>

@endsection
