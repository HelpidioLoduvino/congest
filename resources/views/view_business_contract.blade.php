@extends('main_admin')

@section('content')
@if(!empty($contract))
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <div style = "overflow:auto; overflow-x:hidden; max-height: 600px; margin-left: 50px; margin-right: 50px;">
        <div class="container mt-3">
            <div class="d-flex justify-content-center">
                <span class="logotipo">
                    <img src="{{ asset('/icon/logo.svg') }}" width="40">
                </span>
            </div>
            <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
            <h6 class="d-flex justify-content-center mb-5"><strong>CONTRATO DO CONDOMÍNIO</strong></h6>
            <div class="row">
                <h6><strong>DADOS DA EMPRESA</strong></h6>
                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>NOME DA EMPRESA</h6>
                    <h5><strong>{{$contract->name}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>NIF</h6>
                    <h5><strong>0076787887</strong></h5>
                </div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>LOCALIZAÇÃO</h6>
                    <h5><strong>{{$contract->address}}</strong></h5>
                </div>

                <h6><strong>CONTATOS</strong></h6>

                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3">
                    <h6>TELEFONE</h6>
                    <h5><strong>{{$contract->contact}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3">
                    <h6>EMAIL</h6>
                    <h5><strong>{{$contract->email}}</strong></h5>
                </div>

                <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>NOME DO CONDOMÍNIO</h6>
                    <h5><strong>{{$contract->condo_name}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>LOCALIZAÇÃO</h6>
                    <h5><strong>{{$contract->condo_address}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3">
                    <h6>LOTES</h6>
                    <h5><strong>{{$contract->plot}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3">
                    <h6>RESIDÊNCIAS</h6>
                    <h5><strong>{{$contract->residency}}</strong></h5>
                </div>

                <h6><strong>DADOS DO CONTRATO</strong></h6>
                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>PLANO DO CONTRATO</h6>
                    <h5><strong>{{$contract->plan}}</strong></h5>
                </div>

            </div>
        </div>
    </div>
</div>
@endif
@endsection
