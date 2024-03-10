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

<div class="card mt-5" style="background-color: rgb(93, 0, 0);">
    <div class="card-body shadow-card">
        <div class="d-flex d-md-block d-md-flex justify-content-center mb-3">
            <img src="{{ asset('/icon/logo2.svg') }}" width="50">
        </div>
        <h6 class="text-banner title-banner white-text">Sistema Completo <br> para Adminstração de condomínios</h6>
        <p class=" text-banner white-text ">Automatizamos a gerencia do seu condomínio por meio de uma plataforma simples e fácil de manusear</p>
    </div>
</div>

<p class="banner-text white-text mt-3">Deixe o papél para trás e abrace uma gestão totalmente digitalizada.</p>

<div class="white-separator mb-3"></div>

<div class="row">
  <div class="col-md-4">
    <div class="card">
        <img src="{{asset('img/casa02.jpeg')}}" class="card-img" alt="...">
      </div>
  </div>
  <div class="col-md-4">
    <div class="card">
        <img src="{{asset('img/casa02.jpeg')}}" class="card-img" alt="...">
      </div>
  </div>
  <div class="col-md-4">
    <div class="card">
        <img src="{{asset('img/casa02.jpeg')}}" class="card-img" alt="...">
      </div>
  </div>
</div>

@endsection
