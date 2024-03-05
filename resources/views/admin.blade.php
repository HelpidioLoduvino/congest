@extends('main_admin')

@section('content')
<div class="condo-font card shadow-card mt-3" style="background-color: goldenrod">
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <span class="logotipo">
                <img src="{{ asset('/icon/logo2.svg') }}" width="40">

            </span>
        </div>
        <h6 class="d-flex justify-content-center white-text"><strong>ConGest</strong></h6>
        <h6 class="d-flex justify-content-center mb-5 white-text"><strong>FICHA DE CADASTRO DE CONDOMÍNIO</strong></h6>

        <div class="dropdown d-flex justify-content-center mb-3">
            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                TIPO DE CONTRATO
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pessoal">PESSOAL</a></li>
              <li><a class="dropdown-item" href="/empresarial">EMPRESA</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
