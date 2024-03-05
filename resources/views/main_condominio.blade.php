<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

</head>

<body class="condo-background">

    <nav class="condo-navbar navbar navbar-expand-md">

        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav"
            aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 20px;">
            <img class="hover-image" src="{{ asset('/icon/menu.svg') }}" width="45">
        </button>

        <div class="collapse navbar-collapse" id="sidebarNav">
            <div class="sidebar d-md-none">
                <div class="close-btn mb-3 d-flex justify-content-end">
                    <a href="#" class="d-md-none" data-bs-toggle="collapse" data-bs-target="#sidebarNav"
                        aria-controls="sidebarNav" aria-expanded="false" aria-label="Close sidebar">
                        <img class="hover-image" src="{{ asset('/icon/close-circle.svg') }}" width="40">
                    </a>
                </div>
                <ul>
                    <li class="nav-link">
                        <span class="logotipo">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="40">
                            ConGest
                        </span>
                    </li>
                    <div class="sidebar-separator container"></div>
                    <br>
                    <li class="nav-link">
                        <a class="navbar-link" href="/condominio/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/home.svg') }}" width="25">
                                Home
                            </div>
                        </a>
                    </li>
                    <div class="container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" data-bs-toggle="collapse" href="#feeList" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/apartment.svg') }}" width="25">
                                Taxa dos Moradores
                            </div>
                        </a>
                        <div class="collapse" id="feeList">
                            <ul class="navbar-nav mt-3">
                                <li class="navbar-link">
                                    <a class="nav-link" href="/comprovativos">
                                        <div class="zoom-effect">
                                            <img class="hover-image" src="{{ asset('/icon/receipt.svg') }}"
                                                width="25">
                                            Comprovativos
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-link" href="/taxas">
                                        <div class="zoom-effect">
                                            <img class="hover-image" src="{{ asset('/icon/receipt-check.svg') }}"
                                                width="25">
                                            Lista dos Moradores
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/avisos/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/notice.svg') }}" width="25">
                                Avisos
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/reuniões/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/meeting.svg') }}" width="25">
                                Reuniões
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/moradores/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/person.svg') }}" width="25">
                                Moradores
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/mensagens/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/message.svg') }}" width="25">
                                Mensagens
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/reservas/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/reservation.svg') }}" width="25">
                                Reservas
                            </div>
                        </a>
                    </li>
                    <div class="sidebar-separator mb-3 container mt-3"></div>
                </ul>
            </div>
        </div>

        <div class="d-md-none" style="margin-right: 20px;">
            <form action="/logout" method="post">
                @csrf
                <div class="zoom-effect">
                    <input class="hover-image" type="image" src="{{asset('/icon/logout.svg')}}" alt="" width="35">
                </div>
            </form>
        </div>

        <div class="collapse navbar-collapse d-md-flex justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right:20px;">
                    <form action="/logout" method="post">
                        @csrf
                        <div class="zoom-effect">
                            <input class="hover-image" type="image" src="{{asset('/icon/logout.svg')}}" alt="" width="35">
                        </div>
                    </form>
                </li>
            </ul>
        </div>

    </nav>

    <div class="row">
        <div class="col-md-3">
            <div class="sidebar d-none d-md-block">
                <ul>
                    <li class="nav-link">
                        <span class="logotipo">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="40">
                            ConGest
                        </span>
                    </li>
                    <div class="sidebar-separator container"></div>
                    <br>
                    <li class="nav-link">
                        <a class="navbar-link" href="/condominio/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/home.svg') }}" width="25">
                                Home
                            </div>
                        </a>
                    </li>
                    <div class="container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" data-bs-toggle="collapse" href="#feeList" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/apartment.svg') }}" width="25">
                                Taxa dos Moradores
                            </div>
                        </a>
                        <div class="collapse" id="feeList">
                            <ul class="navbar-nav mt-3">
                                <li class="navbar-link">
                                    <a class="nav-link" href="/comprovativos">
                                        <div class="zoom-effect">
                                            <img class="hover-image" src="{{ asset('/icon/receipt.svg') }}"
                                                width="25">
                                            Comprovativos
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-link" href="/taxas">
                                        <div class="zoom-effect">
                                            <img class="hover-image" src="{{ asset('/icon/receipt-check.svg') }}"
                                                width="25">
                                            Lista dos Moradores
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/avisos/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/notice.svg') }}" width="25">
                                Avisos
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/reuniões/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/meeting.svg') }}" width="25">
                                Reuniões
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/moradores/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/person.svg') }}" width="25">
                                Moradores
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/mensagens/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/message.svg') }}" width="25">
                                Mensagens
                            </div>
                        </a>
                    </li>
                    <div class=" container">
                        <hr>
                    </div>
                    <li class="nav-link">
                        <a class="navbar-link" href="/reservas/{{session('id')}}">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/reservation.svg') }}" width="25">
                                Reservas
                            </div>
                        </a>
                    </li>
                    <div class="sidebar-separator mb-3 container mt-3"></div>
                </ul>
            </div>
        </div>

        <div class="col-md-8">
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
                    @if(session('msg'))
                        <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                            <p class="msg d-flex justify-content-center">{{session('msg')}}</p>
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

</body>

</html>
