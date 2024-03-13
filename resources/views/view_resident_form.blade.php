@extends('main_condominio')

@section('content')
@if (!empty($resident))
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <div style="margin-right: 50px; margin-left: 50px; overflow: auto; max-height: 600px;">
        <div class="card border-0 card-body shadow-card mt-3">
            <div class="d-flex justify-content-center">
                <span class="logotipo">
                    <img src="{{ asset('/icon/logo.svg') }}" width="40">

                </span>
            </div>
            <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
            <h6 class="d-flex justify-content-center mb-5"><strong>CONTRATO DO MORADOR</strong></h6>
            <div class="row">
                <h6><strong>DADOS PESSOAIS</strong></h6>
                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>NOME COMPLETO</h6>
                    <h5><strong>{{$resident->name}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>BILHETE DE IDENTIDADE</h6>
                    <h5><strong>{{$resident->bi}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3">
                    <h6>DATA DE NASCIMENTO</h6>
                    <h5><strong>{{$resident->birthday}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>GÉNERO</h6>
                    <h5><strong>{{$resident->gender}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>NACIONALIDADE</h6>
                    <h5><strong>{{$resident->nationality}}</strong></h5>
                </div>

                <h6><strong>CONTATOS</strong></h6>
                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3">
                    <h6>TELEFONE</h6>
                    <h5><strong>{{$resident->contact}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3">
                    <h6>EMAIL</h6>
                    <h5><strong>{{$resident->email}}</strong></h5>
                </div>

                <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
                <div class="form-separator mb-3"></div>


                <div class="col-md-6 mb-3 uppercase-text">
                    <h6>LOTE</h6>
                    <h5><strong>{{$resident->plot_resident}}</strong></h5>
                </div>

                <div class="col-md-6 mb-3">
                    <h6>RESIDÊNCIA</h6>
                    <h5><strong>{{$resident->residency_number}}</strong></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
