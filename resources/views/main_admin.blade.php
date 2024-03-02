<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

</head>

<body class="antialiased">

    <nav class="condo-navbar navbar navbar-expand-md">

        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav"
            aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 20px;">
            <img class="hover-image" src="{{asset('/icon/menu.svg')}}" width="35">
        </button>

        <div class="collapse navbar-collapse" id="sidebarNav">
            <div class="sidebar d-md-none">
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
                        <a href="/perfil-admin/{{session('id')}}">
                            <img class="hover-image" src="{{ asset('/icon/profile.svg') }}" width="25">
                            Perfil
                        </a>
                    </li>
                </ul>
            </div>
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
                        <a href="/perfil-admin/{{session('id')}}">
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
        $(document).ready(function(){
            $("#clickableBody tr").click(function(){
                var tipoContrato = $(this).data('type');
                var userId = $(this).data('user-id');

                if (tipoContrato === "Empresa") {
                    // Open the modal for business contract
                    $("#contractCompanyModal").modal('show');
                    // You can use the userId variable to get user-specific data
                    console.log("User ID for business contract: " + userId);
                } else if (tipoContrato === "Pessoal") {
                    // Open the modal for personal contract
                    $("#contractPersonModal").modal('show');
                    // You can use the userId variable to get user-specific data
                    console.log("User ID for personal contract: " + userId);
                }
            });
        });
    </script>
</body>

</html>
