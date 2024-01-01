@extends('main_condominio')

@section('content')

<div class="condo-font card card-body shadow-card mt-3">
    <h5 class="card-title mb-4"> <strong>De: Johelsa Mateus</strong></h5>
    <h5 class="card-title mb-4"> <strong>Para: Coordenação do Condomínio</strong></h5>
    <h5 class="card-title text-muted mb-4"> Data: 10/5/2023, 12:30</h5>
    <h5 class="card-title d-flex justify-content-center mb-4"> <strong>Barulho na Vizinhança</strong></h5>
    <p>A vizinha na casa ao lado está a fazer muito barulho. Não conseguimos dormir.</p>
</div>

<div class="d-flex justify-content-center mt-4">
    <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#replyModal">Responder</a>
</div>

<div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down modal-xl">
        <div class="modal-content">
            <div class="modal-body">

                <div class="close-btn mb-5 d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <h5 class="card-title mb-4"> <strong>De: Coordenação do Condomínio</strong></h5>
                <h5 class="card-title mb-4"> <strong>Para: Johelsa Mateus</strong></h5>

                <form action="" method="">
                    @csrf
                    <div class="form-group mb-4">
                        <textarea name="complaint_reply" class="form-control" cols="30" rows="5" placeholder="Escrever resposta"></textarea>
                    </div>

                    <button class="btn btn-dark" type="submit">Enviar</button>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
