@extends('main_admin')

@section('content')

<div class="banner card card-body condo-font shadow-card mt-3" style="background-color: goldenrod;">
    <div class="d-none d-md-block d-md-flex justify-content-center">
        <img src="{{ asset('/icon/profile-black.svg') }}" width="100">
    </div>
    <h6 class="text-banner title-banner white-text">Nome: {{$user->name}}</h6>
    <h6 class="text-banner title-banner white-text">Email: {{$user->email}}</h6>
    <p class="text-banner white-text">Tipo de Utilizador: {{$user->type}}</p>
</div>


<form action="/logout" method="post">
    @csrf
    <span class="d-flex justify-content-center">
        <input type="submit" class="btn btn-danger mt-3" value="Sair">
    </span>
</form>

@endsection
