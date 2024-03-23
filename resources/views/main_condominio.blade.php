<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                        <ul class="text-style" id="focus">
                            <li class="list-style">
                                <a class="navbar-link" href="/condominio/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/house.svg') }}" width="25">
                                        Home
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/comprovativos">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/houses.svg') }}" width="25">
                                        Financeiro
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/reuniões/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/meeting.svg') }}" width="25">
                                        Reuniões
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/reservas/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/calendar.svg') }}" width="25">
                                        Reservas
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/mensagens/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/email.svg') }}" width="25">
                                        Mensagens
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/moradores/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/group-team.svg') }}" width="25">
                                        Moradores
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/avisos/{{session('id')}}">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/information.svg') }}" width="25">
                                        Aviso
                                    </div>
                                </a>
                            </li>
                            <li class="list-style" style="margin-top: 70px;">
                                <a class="navbar-link" href="#" class="card-bottom-text">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/setting.svg') }}" width="25">
                                        Configurações
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="content mb-5">
                <div class="container">
                    @if($errors->any())
                        <div class="alert mt-3 alert-danger alert-dismissible d-flex justify-content-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script src="/bootstrap/script/popper.js"></script>
    <script src="/bootstrap/script/bootstrap.min.js"></script>
    <script src="/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#clickableBody tr").click(function() {
                $("#contractResidentModal").modal('show');
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var destaque = document.querySelectorAll('#focus li .zoom-effect');
            console.log(destaque)
            destaque.forEach(function(item) {
                item.addEventListener("click", function() {
                    // Define a cor de fundo para o item clicado
                    this.classList.add("text-change");

                    // Armazena o índice do item clicado no armazenamento local do navegador
                    localStorage.setItem("selectedItemIndex", Array.from(destaque).indexOf(item));
                });
                // Verifica se há um item previamente selecionado e destaca-o
                var selectedItemIndex = localStorage.getItem("selectedItemIndex");
                if (selectedItemIndex !== null) {
                    destaque[selectedItemIndex].classList.add("text-change");
                }
            })
        })
    </script>
</body>
</html>
