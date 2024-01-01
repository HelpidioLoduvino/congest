<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

</head>

<body class="antialiased">

    <nav class="condo-navbar navbar navbar-expand-md">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav"
            aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 20px;">
            <img class="hover-image" src="{{asset('/icon/menu.svg')}}" width="40">
        </button>

        <div class="collapse navbar-collapse" id="sidebarNav">
            <div class="sidebar">
                <div class="close-btn mb-3 d-flex justify-content-end">
                    <a href="#" class="d-md-none" data-bs-toggle="collapse"
                        data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false"
                        aria-label="Close sidebar">
                        <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="40">
                    </a>
                </div>
                <ul>
                    <li>
                        <span class="logotipo">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="40">
                            ConGest
                        </span>
                    </li>
                    <div class="sidebar-separator container"></div>
                    <br>
                    <li class="nav-link">
                        <a class="navbar-link" href="/admin">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/home.svg') }}" width="25">
                                <span>Home</span>
                            </div>
                        </a>
                    </li>
                    <div class="container">
                        <hr>
                    </div>
                    <li>
                        <a href="/condomínios">
                            <img class="hover-image" src="{{ asset('/icon/apartment.svg') }}" width="25">
                            Condomínios
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="margin-right:20px;">
                        <img class="hover-image" src="{{ asset('/icon/logout.svg') }}" width="40">
                    </a>
                </li>
            </ul>
        </div>

    </nav>

    <div class="row">
        <div class="col-md-3">
            <div class="sidebar d-none d-md-block">
                <ul>
                    <li>
                        <span class="logotipo">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="40">
                            ConGest
                        </span>
                    </li>
                    <div class="sidebar-separator container"></div>
                    <br>
                    <li>
                        <a href="/admin">
                            <img class="hover-image" src="{{ asset('/icon/home.svg') }}" width="25">
                            Home
                        </a>
                    </li>
                    <div class="container">
                        <hr>
                    </div>
                    <li>
                        <a href="/condomínios">
                            <img class="hover-image" src="{{ asset('/icon/apartment.svg') }}" width="25">
                            Condomínios
                        </a>
                    </li>
                    <div class="container">
                        <hr>
                    </div>
                    <li>
                        <a href="">
                            <img class="hover-image" src="{{ asset('/icon/profile.svg') }}" width="25">
                            Perfil
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-8">
            <div class="content mb-5">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script src="/bootstrap/script/popper.js"></script>
    <script src="/bootstrap/script/bootstrap.min.js"></script>
    <script src="/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#clickableBody tr").click(function(){
                var tipoContrato = $(this).data('type');

                // Aqui você pode definir lógica para abrir diferentes modais baseados no tipo de contrato.
                // Por exemplo:
                if (tipoContrato === "Empresa") {
                    // Abrir modal de empresa
                    $("#contractCompanyModal").modal('show');
                } else if (tipoContrato === "Pessoal") {
                    // Abrir modal de contrato pessoal
                    $("#contractPersonModal").modal('show');
                }
            });
        });
        </script>
</body>

</html>
