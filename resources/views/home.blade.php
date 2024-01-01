@extends('main')

@section('content')

<div class="banner card card-body shadow-card">
    <div class="d-none d-md-block d-md-flex justify-content-center">
        <img src="{{ asset('/icon/logo.svg') }}" width="100">
    </div>
    <h5 class="text-banner title-banner">Sistema Completo <br> para Adminstração de condomínios</h5>
    <p class="text-muted text-banner">Automatizamos a gerencia do seu condomínio por meio de uma plataforma simples e fácil de manusear.</p>
</div>

<div class="banner card card-body shadow-card d-md-none mt-3">
    <div class="d-flex justify-content-center">
        <h5 class="banner-text">Deixe o papél para trás e abrace uma gestão totalmente digitalizada.</h5>
    </div>
</div>

<div class="d-none d-md-block d-md-flex justify-content-center mt-5">
    <h5 class="banner-text">Deixe o papél para trás e abrace uma gestão totalmente digitalizada.</h5>
</div>

@endsection
