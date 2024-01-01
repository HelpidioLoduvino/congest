@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Avisos</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong>Enviar Aviso</strong></h5>

    <form action="" method="">
        <div class="form-group mb-3">
            <label for="">De:</label>
            <select name="" class="form-control">
                <option value="Coordenação do Condomínio">Coordenação do Condomínio</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Para:</label>
            <select name="" class="form-control">
                <option value="">Escolher</option>
                <option value="Todos do Condomínio">Todos do Condomínio</option>
                <option value="Portaria">Portaria</option>
                <option value="Moradores">Moradores</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <input type="text" name="notice_subject" placeholder="Assunto" class="form-control">
        </div>

        <div class="form-group mb-3">
            <textarea name="notice" class="form-control" cols="50" rows="3" placeholder="Compor" ></textarea>
        </div>

        <button class="btn btn-dark" type="submit">Enviar</button>
    </form>
</div>

<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="d-flex justify-content-center mb-3"><strong>Avisos</strong></h5>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Mensagem</th>
                    <th>De</th>
                    <th>Para</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
