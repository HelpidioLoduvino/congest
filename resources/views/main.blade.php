<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <title>CONGEST</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

</head>

<body>

    <nav class="condo-navbar navbar navbar-expand-md">

        <a class="navbar-link" href="#" style="margin-left: 20px; margin-right:20px;">
            <img src="{{ asset('/icon/home2.svg') }}" width="35">
            <span style="color: white">ConGest</span>
        </a>

        <div class="d-none collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="navbar-link" href="#">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/solution.svg') }}"
                                    width="25">
                                <span style="color: white">Soluções</span>
                            </div>
                        </a>
                        <div class="dropdown-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a class="nav-link">
                                                <div class="card card-body">
                                                    <h5>Avisos</h5>
                                                    <p>Os administradores do condomínio podem enviar
                                                        avisos e comunicados para todos os moradores de forma simples.</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="nav-link">
                                                <div class="card card-body">
                                                    <h5>Reuniões</h5>
                                                    <p>Os administradores do condomínio podem marcar
                                                        reuniões presenciais ou digitais fazendo com que o morador não tenha
                                                        que sair de casa.</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="nav-link">
                                                <div class="card card-body">
                                                    <h5>Taxa dos Moradores</h5>
                                                    <p>Os administradores do condomínio podem ver uma
                                                        lista de todos os moradores, podendo controlar de forma prática e
                                                        eficiente o estado de cada morador.</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="nav-link">
                                                <div class="card card-body">
                                                    <h5>Sugestões e Reclamações</h5>
                                                    <p>Os moradores podem fazer reclamação de forma
                                                        simples e apresenta sugestões à administração do condomínio.</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="nav-link">
                                                <div class="card card-body">
                                                    <h5>Informações sobre gestão</h5>
                                                    <p>Os moradores serão informados sobre a gestão
                                                        financeira e administrativa do condomínio, incluindo despesas,
                                                        receitas e outras informações relevantes.</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a class="nav-link">
                                                <div class="card card-body">
                                                    <h5>Portaria</h5>
                                                    <p>Os porteiros terão maior controlo de quem entra e
                                                        sai do condomínio, e registrar de forma simples e eficiente os dados
                                                        de todos os visitantes.</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <div class="barra" style="margin-right: 5px; margin-left: 20px;">
                </div>
                <li class="nav-item">

                    <div class="container">
                        <div class="dropdown">
                            <a class="navbar-link" href="#">
                                <div class="zoom-effect">
                                    <img class="hover-image" src="{{ asset('/icon/about.svg') }}" width="25">
                                    <span style="color: white">Sobre Nós</span>
                                </div>
                            </a>
                            <div class="dropdown-content">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a class="nav-link">
                                                <div class="card card-body shadow-card">
                                                    <p>A <strong>ConGest</strong> é uma empresa
                                                        de gestão de condomínios cujo objetivo é facilitar e
                                                        otimizar a administração, organização e controle de um
                                                        condomínio, seja ele residencial, comercial ou misto.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                </div>
            </ul>
        </div>

        <div class="d-md-none" style="margin-left: 100px;">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#solutionModal">
                <img class="hover-image" src="{{ asset('icon/solution.svg') }}" width="35">
            </a>

            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#aboutModal">
                <img class="hover-image" src="{{ asset('/icon/notice.svg') }}" width="35">
            </a>

            <a href="#">
                <img class="hover-image" src="{{ asset('/icon/whatsapp.svg') }}" width="35">
            </a>

            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                <img class="hover-image" src="{{ asset('/icon/login.svg') }}" width="35">
            </a>
        </div>

        <div class="ml-auto">
            <ul class="navbar-nav">
                <div class="d-none d-md-flex">
                    <li>
                        <dropdown class="dropdown">
                            <button class="btn bg-transparent border-0 " style="color: white;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Soluções
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                        </dropdown>
                    </li>
                    <li>

                        <dropdown class="dropdown">
                            <button class="btn bg-transparent border-0 me-2" style="color: white;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sobre Nós
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" style="width: 100vh;">
                            <p>A <strong>ConGest</strong> é uma empresa
                                de gestão de condomínios cujo objetivo é facilitar e
                                otimizar a administração, organização e controle de um
                                condomínio, seja ele residencial, comercial ou misto.</p>
                            </ul>
                        </dropdown>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-warning round-5" type="button" data-bs-toggle="modal"
                            data-bs-target="#loginModal" style="margin-right: 20px; color: white;">
                            Login
                        </button>
                    </li>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

    <div class="col">

        <div class="row">
            <main>
                <div class="container mt-5 mb-5">
                    @yield('content')
                </div>
            </main>
        </div>

        <div class="row">
            <footer>
                <table>
                    <thead>
                        <tr>
                            <th class="letra" scope="col">Navegação</th>
                            <th class="letra" scope="col">ConGest</th>
                            <th class="letra" scope="col">Privacidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-link"><a class="table-link" href="#">Home</a></td>
                            <td class="table-link"><a class="table-link" href="#">Centro de Ajuda</a></td>
                            <td class="table-link"><a class="table-link" href="#">Termos de uso</a></td>
                        </tr>
                        <tr>
                            <td class="table-link"><a class="table-link mb-3" href="#">Soluções</a></td>
                            <td class="table-link"><a class="table-link" href="#">Contacte-nos</a></td>
                            <td class="table-link"><a class="table-link" href="#">Privacidade</a></td>
                        </tr>
                        <tr>
                            <td class="table-link"><a class="table-link" href="#">Sobre nós</a></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </footer>
        </div>

        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="
                    background-image: url('{{ asset('img/img4.jpg') }}');
                    background-size: cover;
                    ">
                    <div class="modal-body" style="background-color:rgba(0, 0, 0, 0.7)">
                        <div class="close-btn mb-5 d-flex justify-content-end">
                            <input type="image" src="{{asset('/icon/close.svg') }}" data-bs-dismiss="modal" aria-label="Close" width="35">
                        </div>
                        <div class="card card-body shadow-card" style="background-color:#4098db; max-width: 400px; margin: auto;">
                            <div class="user-circle mb-3 d-flex justify-content-center">
                                <img src="{{ asset('/icon/home2.svg') }}">
                            </div>
                            <form action="/login" method="post">
                                @csrf
                                <span class="d-flex justify-content-center mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        style="width: 300px; background-color:rgb(255, 245, 225);">
                                </span>

                                <span class="d-flex justify-content-center mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Palavra-Passe"
                                        style="width: 300px; background-color:rgb(255, 245, 225);">
                                </span>

                                <span class="d-flex justify-content-center mb-3">
                                    <input type="submit" class="btn btn-danger" value="Entrar" style="color: white">
                                </span>
                            </form>
                            <a href="#" class="nav-link d-flex justify-content-center" style="color: white"> <u> Esqueci a minha palavra-passe</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="solutionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-sm-down">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="close-btn mb-5 d-flex justify-content-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="user-circle mb-3 d-flex justify-content-center">
                            <img src="{{ asset('/icon/logo.svg') }}">
                        </div>

                        <div class="row">
                            <div class="col">
                                <a class="nav-link">
                                    <div class="card card-body">
                                        <h5 class="card-title">Avisos</h5>
                                        <p class="text-muted">Os administradores do condomínio podem enviar avisos e
                                            comunicados para todos os moradores de forma simples.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a class="nav-link">
                                    <div class="card card-body">
                                        <h5 class="card-title">Reuniões</h5>
                                        <p class="text-muted">Os administradores do condomínio podem marcar reuniões
                                            presenciais ou digitais fazendo com que o morador não tenha que sair de
                                            casa.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a class="nav-link">
                                    <div class="card card-body">
                                        <h5 class="card-title">Taxa dos Moradores</h5>
                                        <p class="text-muted">Os administradores do condomínio podem ver uma lista de
                                            todos os moradores, podendo controlar de forma prática e eficiente o estado
                                            de cada morador.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a class="nav-link">
                                    <div class="card card-body">
                                        <h5 class="card-title">Sugestões e Reclamações</h5>
                                        <p class="text-muted">Os moradores podem fazer reclamação de forma simples e
                                            apresenta sugestões à administração do condomínio.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a class="nav-link">
                                    <div class="card card-body">
                                        <h5 class="card-title">Informações sobre gestão</h5>
                                        <p class="text-muted">Os moradores serão informados sobre a gestão financeira e
                                            administrativa do condomínio, incluindo despesas, receitas e outras
                                            informações relevantes.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a class="nav-link">
                                    <div class="card card-body">
                                        <h5 class="card-title">Portaria</h5>
                                        <p class="text-muted">Os porteiros terão maior controlo de quem entra e sai do
                                            condomínio, e registrar de forma simples e eficiente os dados de todos os
                                            visitantes.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-sm-down">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="close-btn mb-5 d-flex justify-content-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="user-circle mb-3 d-flex justify-content-center">
                            <img src="{{ asset('/icon/logo.svg') }}">
                        </div>

                        <div class="row">
                            <div class="col">
                                <a class="nav-link">
                                    <div class="card card-body">
                                        <p class="text-muted">A <strong>ConGest</strong> é uma empresa de gestão de
                                            condomínios cujo objetivo é facilitar e otimizar a administração,
                                            organização e controle de um condomínio, seja ele residencial, comercial ou
                                            misto.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="/bootstrap/script/popper.js"></script>
        <script src="/bootstrap/script/bootstrap.min.js"></script>
        <script src="/jquery/jquery.min.js"></script>
</body>

</html>
