@extends('main_condominio')

@section('content')
@if (!empty($condoId))
<form action="/cadastrar-morador" method="post">
    @csrf
    <div class="card card-banner shadow-card mt-3">
        <div class="container mt-3">
            <div class="d-flex justify-content-center">
                <span class="logotipo">
                    <img src="{{ asset('/icon/logo.svg') }}" width="40">

                </span>
            </div>
            <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
            <h6 class="d-flex justify-content-center mb-5"><strong>FICHA DE CADASTRO DE MORADOR</strong></h6>
            <div class="row">
                <input type="hidden" name="type" value="morador">
                <input type="hidden" name="condo_id" value="{{$condoId->id}}">
                <input type="hidden" name="owner_id" value="{{session('id')}}">
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

                <h6><strong>CONTATOS</strong></h6>
                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3">
                    <h6>TELEFONE</h6>
                    <input type="tel" name="contact" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <h6>EMAIL</h6>
                    <input type="email" name="email" class="form-control">
                </div>

                <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
                <div class="form-separator mb-3"></div>

                <div class="col-md-6 mb-3">
                    <h6>LOTE</h6>
                    <input type="text" name="plot_resident" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <h6>Nº DA RESIDÊNCIA</h6>
                    <input type="number" name="residency_number" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <span class="d-flex justify-content-center">
        <input type="submit" class="btn btn-warning mt-3" value="Cadastrar" style="color:white;">
    </span>

</form>
@endif
@endsection
