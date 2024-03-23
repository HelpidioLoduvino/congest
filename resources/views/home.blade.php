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

<div class="card mt-5" style ="background-color: #3498db">
    <div class="card-body" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
        <h6 class="text-banner title-banner white-text">Sistema Completo <br> para Adminstração de condomínios</h6>
        <p class=" text-banner white-text ">Automatizamos a gerencia do seu condomínio por meio de uma plataforma simples e fácil de manusear</p>
    </div>
</div>

<p class="banner-text mt-3">Deixe o papél para trás e abrace uma gestão totalmente digitalizada.</p>

<div class="white-separator mb-3"></div>

<div class="row">
  <div class="col-md-4">
    <div class="card">
        <img src="{{asset('img/img4.jpg')}}" class="card-img" height="200">
      </div>
  </div>
  <div class="col-md-4">
    <div class="card">
        <img src="{{asset('img/img1.jpg')}}" class="card-img" height="200">
      </div>
  </div>
  <div class="col-md-4">
    <div class="card">
        <img src="{{asset('img/img3.jpg')}}" class="card-img" height="200">
      </div>
  </div>
</div>

@endsection
