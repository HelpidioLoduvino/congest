@extends('main_admin')

@section('content')

<div class="banner card card-body condo-font shadow-card mt-3">
    <div class="d-none d-md-block d-md-flex justify-content-center">
        <img src="{{ asset('/icon/profile-black.svg') }}" width="100">
    </div>
    <h5 class="text-banner title-banner">Nome: {{$user->name}}</h5>
    <h5 class="text-banner title-banner">Email: {{$user->email}}</h5>
    <p class="text-muted text-banner">Tipo de Utilizador: {{$user->type}}</p>
</div>


<form action="/logout" method="post">
    @csrf
    <span class="d-flex justify-content-center">
        <input type="submit" class="btn btn-danger mt-3" value="Sair">
    </span>
</form>

@endsection
