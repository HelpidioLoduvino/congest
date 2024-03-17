<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

</head>

<body class="condo-background">

    <div class="row g-0">
        <div class="col-md-3">
            <div class="container mt-3">
                <div class="my-card">
                    <div class="d-flex justify-content-center">
                        <img class="mt-5" src="{{asset('icon/user.svg')}}" alt="" width="100">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="dropdown">
                            <button href="#" class="bg-transparent no-border-on-click border-0 d-flex justify-content-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Helpidio Mateus
                                <img src="{{asset('icon/dropdown-arrow.svg')}}" alt="" width="25">
                            </button>
                            <ul class="dropdown-menu">
                                <li class="list-style" style="margin: 0; padding: 0;">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <span class="d-flex justify-content-center">
                                            <input type="submit" class="bg-transparent border-0" value="Sair">
                                        </span>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <ul class="tex-style">
                            <li class="list-style">
                                <a class="navbar-link" href="/morador/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/house.svg') }}" width="25">
                                        Home
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/condominio/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/house.svg') }}" width="25">
                                        Taxa do Condomínio
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/morador-mensagem/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/email.svg') }}" width="25">
                                        Mensagens
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/morador-reserva/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/calendar.svg') }}" width="25">
                                        Reservas
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>


      <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content" style="background-color: #2F3651; color:white;">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="35">
                        </button>
                    </div>
                </li>
                </ul>
                <div class="d-none d-md-block d-md-flex justify-content-center mt-3">
                    <img src="{{ asset('/icon/profile.svg') }}" width="100">
                </div>
                @if (!empty($resident))
                <div class="container">
                    <div class="row">
                        <h6><strong>DADOS PESSOAIS</strong></h6>
                        <div class="form-separator mb-3"></div>

                        <div class="col-md-6 mb-3 uppercase-text">
                            <h6>NOME COMPLETO</h6>
                            <h5><strong>{{$resident->name}}</strong></h5>
                        </div>

                        <div class="col-md-6 mb-3 uppercase-text">
                            <h6>BILHETE DE IDENTIDADE</h6>
                            <h5><strong>{{$resident->bi}}</strong></h5>
                        </div>

                        <div class="col-md-6 mb-3">
                            <h6>DATA DE NASCIMENTO</h6>
                            <h5><strong>{{$resident->birthday}}</strong></h5>
                        </div>

                        <div class="col-md-6 mb-3 uppercase-text">
                            <h6>GÉNERO</h6>
                            <h5><strong>{{$resident->gender}}</strong></h5>
                        </div>

                        <div class="col-md-6 mb-3 uppercase-text">
                            <h6>NACIONALIDADE</h6>
                            <h5><strong>{{$resident->nationality}}</strong></h5>
                        </div>

                        <h6><strong>CONTATOS</strong></h6>
                        <div class="form-separator mb-3"></div>

                        <div class="col-md-6 mb-3">
                            <h6>TELEFONE</h6>
                            <h5><strong>{{$resident->contact}}</strong></h5>
                        </div>

                        <div class="col-md-6 mb-3">
                            <h6>EMAIL</h6>
                            <h5><strong>{{$resident->email}}</strong></h5>
                        </div>

                        <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
                        <div class="form-separator mb-3"></div>


                        <div class="col-md-6 mb-3 uppercase-text">
                            <h6>LOTE</h6>
                            <h5><strong>{{$resident->plot_resident}}</strong></h5>
                        </div>

                        <div class="col-md-6 mb-3">
                            <h6>RESIDÊNCIA</h6>
                            <h5><strong>{{$resident->residency_number}}</strong></h5>
                        </div>
                    </div>

                    <span class="d-flex justify-content-center">
                        <a href="" class="btn btn-warning">EDITAR</a>
                    </span>
                </div>

                @endif
            </div>
          </div>
        </div>
      </div>

    <script src="/bootstrap/script/popper.js"></script>
    <script src="/bootstrap/script/bootstrap.min.js"></script>
    <script src="/jquery/jquery.min.js"></script>

    <script>
        function verificarApp() {
          setTimeout(function () {
            // Redirecionar para a loja de aplicativos se o aplicativo não estiver instalado
            window.location.href = "https://apps.apple.com/us/app/bai-directo/id454984675";
          }, 500);
        }
      </script>

    <script>
        // Função para copiar texto para a área de transferência
        function copiarTexto(elementId) {
            var textoElemento = document.getElementById(elementId);
            var textoSelecionado = window.getSelection();
            var range = document.createRange();

            range.selectNodeContents(textoElemento);
            textoSelecionado.removeAllRanges();
            textoSelecionado.addRange(range);

            document.execCommand('copy');

            alert("Texto copiado: " + textoElemento.textContent);
        }

        // Adiciona a funcionalidade de cópia ao clicar nos elementos
        document.getElementById('numeroConta').addEventListener('click', function() {
            copiarTexto('numeroConta');
        });

        document.getElementById('iban').addEventListener('click', function() {
            copiarTexto('iban');
        });
    </script>

</body>

</html>
