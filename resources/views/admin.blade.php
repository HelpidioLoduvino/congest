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

    <div class="dropdown d-flex justify-content-center mb-3">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            TIPO DE CONTRATO
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/pessoal">PESSOAL</a></li>
          <li><a class="dropdown-item" href="/empresarial">EMPRESA</a></li>
        </ul>
    </div>
</div>
@endsection
