<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/fontawesome/css/brands.css">
    <link rel="stylesheet" href="/fontawesome/css/solid.css">
    <link rel="stylesheet" href="/fontawesome/css/regular.css">

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
                                @if ($resident)
                                    {{$resident->name}}
                                @endif
                                <img src="{{asset('icon/dropdown-arrow.svg')}}" alt="" width="25">
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <span class="d-flex">
                                        <i class="fa-regular fa-user mt-2" style="margin-left: 20px;"></i>
                                        <a href="/perfil-morador/{{session('id')}}" class="dropdown-item">Perfil</a>
                                    </span>
                                </li>
                                <li class="list-style" style="margin: 0; padding: 0;">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <span class="d-flex">
                                            <i class="fa-solid fa-arrow-right-from-bracket mt-2" style="margin-left: 20px;"></i>
                                            <input type="submit" class="dropdown-item" value="Sair">
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
                                        <img class="hover-image" src="{{ asset('/icon/house.svg') }}" width="20" style="margin-left: 3px;">
                                        Home
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/taxa-condominio/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/dollar.svg') }}" width="25">
                                        Financeiro
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/morador-mensagem/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/email.svg') }}" width="20" style="margin-left: 3px;">
                                        Mensagens
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/morador-reserva/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/calendar.svg') }}" width="25" style="margin-left: 3px;">
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
