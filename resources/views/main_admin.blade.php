<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style2.css">
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
                                <li>
                                    <a href="/perfil-admin/{{session('id')}}" class="dropdowm-item">Perfil</a>
                                </li>
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
                        <ul class="text-style">
                            <li class="list-style">
                                <a class="navbar-link" href="/admin">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/house.svg') }}" width="25">
                                        Home
                                    </div>
                                </a>
                            </li>
                            <li class="list-style">
                                <a class="navbar-link" href="/condomínios">
                                    <div class="zoom-effect">
                                        <img class="hover-image" src="{{ asset('/icon/houses.svg') }}" width="25">
                                        Condomínios
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container mt-3">
                @yield('content')
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
