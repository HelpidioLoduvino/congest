@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Reuniões</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong>Marcar Reunião</strong></h5>

    <form action="" method="">
        <div class="form-group mb-3">
            <label for="">Data:</label>
            <input type="datetime-local"  name="" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="">Local:</label>
            <select name="" class="form-control">
                <option value="">Escolher</option>
                <option value="Parque do Condominio">Parque do Condominio</option>
                <option value="Google Meeting">Google Meeting</option>
                <option value="Moradores">Reunião Online</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Com:</label>
            <select name="" class="form-control">
                <option value="">Escolher</option>
                <option value="Todos do Condomínio">Todos do Condomínio</option>
                <option value="Portaria">Portaria</option>
                <option value="Moradores">Moradores</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <input type="text" name="meeting_subject" placeholder="Assunto" class="form-control">
        </div>

        <div class="form-group mb-3">
            <textarea name="meeting" class="form-control" cols="50" rows="3" placeholder="Compor" ></textarea>
        </div>

        <button class="btn btn-dark" type="submit">Marcar</button>
    </form>
</div>

<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong> Reuniões</strong></h5>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Assunto</th>
                    <th>Com</th>
                    <th>Local</th>
                    <th>Data</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection
