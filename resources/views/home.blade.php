@extends('main')

@section('content')

@if($errors->any())
    <div class="alert alert-danger d-flex justify-content-center">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card" style="background-color: rgb(93, 0, 0);">
    <div class="card-body shadow-card">
        <div class="d-flex d-md-block d-md-flex justify-content-center mb-3">
            <img src="{{ asset('/icon/logo2.svg') }}" width="80">
        </div>
        <h5 class="text-banner title-banner white-text">Sistema Completo <br> para Adminstração de condomínios</h5>
        <p class=" text-banner white-text ">Automatizamos a gerencia do seu condomínio por meio de uma plataforma simples e fácil de manusear</p>
    </div>
</div>

<p class="banner-text white-text mt-3">Deixe o papél para trás e abrace uma gestão totalmente digitalizada.</p>

@endsection
