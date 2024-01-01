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

        <a class="navbar-link" style="margin-left: 20px;">
            <div class="zoom-effect">
                <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                <span>ConGest</span>
            </div>
        </a>

        <button class="btn d-md-block" data-bs-toggle="modal" data-bs-target="#menuModal" style="margin-right: 20px;">
            <img class="hover-image" src="{{asset('/icon/menu.svg')}}" width="30">
        </button>

        <div class="collapse navbar-collapse d-md-flex justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right:20px;">
                    <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#bookingModal">
                        <div class="zoom-effect">
                            <img class="hover-image" src="{{ asset('/icon/reservation.svg') }}" width="25">
                            Fazer Reserva
                        </div>
                    </a>
                </li>
                <li class="nav-item" style="margin-right:20px;">
                    <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#complaintModal">
                        <div class="zoom-effect">
                            <img class="hover-image" src="{{ asset('/icon/complaint.svg') }}" width="25">
                            Fazer Reclamação
                        </div>
                    </a>
                </li>
                <li class="nav-item" style="margin-right:20px;">
                    <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#messageModal">
                        <div class="zoom-effect">
                            <img class="hover-image" src="{{ asset('/icon/message.svg') }}" width="25">
                            Enviar Mensagem
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-md-none d-flex" style="margin-left: 60px;">
            <ul class="navbar-nav">
                <li class="nav-item d-flex">
                    <a class="nav-link" style="margin-right: 10px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#bookingModal">
                        <img class="hover-image" src="{{ asset('/icon/reservation.svg') }}" width="25">
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-md-none d-flex">
            <ul class="navbar-nav">
                <li class="nav-item d-flex">
                    <a class="nav-link" style="margin-right: 10px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#complaintModal">
                        <img class="hover-image" src="{{ asset('/icon/complaint.svg') }}" width="25">
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-md-none d-flex">
            <ul class="navbar-nav">
                <li class="nav-item d-flex">
                    <a class="nav-link" style="margin-right: 10px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#messageModal">
                        <img class="hover-image" src="{{ asset('/icon/message.svg') }}" width="25">
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-flex ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="margin-right: 20px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#profileModal">
                        <img class="hover-image" src="{{ asset('/icon/profile.svg') }}" width="30">
                    </a>
                </li>
            </ul>
        </div>


    </nav>

    <div class="col">
        <div class="row">
            <div class="content mb-5">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>

        <div class="row">
            <footer>
                <table>
                    <h5 class="font-times mt-2" style="color: white">@Powered By Helpidio Mateus</h5>
                </table>
            </footer>
        </div>
    </div>


    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down" >
          <div class="modal-content" style="background-color: rgb(24, 24, 220)">
            <div class="modal-body">
                <ul class="navbar-nav" style="margin-left: 100px;">
                    <li class="nav-link">
                        <div class="d-flex justify-content-end">
                            <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                                <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="40">
                            </button>
                        </div>
                    </li>
                    <li class="nav-link">
                        <span class="logotipo">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="40">
                            ConGest
                        </span>
                    </li>
                    <div class="sidebar-separator container"></div>
                    <br>
                    <li class="nav-link">
                        <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#feeModal">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/apartment.svg') }}" width="25">
                                Taxa do Condomínio
                            </div>
                        </a>
                    </li>
                    <hr style="color: white">
                    <li class="nav-link">
                        <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#correspondenceModal">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/email.svg') }}" width="25">
                                Correspondência
                            </div>
                        </a>
                    </li>
                    <hr style="color: white">
                    <li class="nav-link">
                        <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#showBookingModal">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/reservation.svg') }}" width="25">
                                Reservas
                            </div>
                        </a>
                    </li>
                    <hr style="color: white">
                    <li class="nav-link">
                        <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#showComplaintModal">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/complaint.svg') }}" width="25">
                                Reclamações
                            </div>
                        </a>
                    </li>
                    <hr style="color: white">
                    <li class="nav-link">
                        <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#emergencyModal">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/emergency.svg') }}" width="25">
                                Contactos de Emergência
                            </div>
                        </a>
                    </li>
                    <hr style="color: white">
                    <li class="nav-link">
                        <a class="navbar-link" href="/">
                            <div class="zoom-effect">
                                <img class="hover-image" src="{{ asset('/icon/logout.svg') }}" width="25">
                                Sair
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
              </ul>

              <div class="condo-font card card-body shadow-card mt-3">
                <h5 class="d-flex justify-content-center mb-3"><strong>Marcar Reserva</strong></h5>

                <form action="">
                    <div class="form-group mb-3">
                        <label for="">De: Helpidio Mateus</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Para: Coordenação do Condomínio</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="booking_subject">Assunto:</label>
                        <input type="text" class="form-control" name="booking_subject" placeholder="Ex: Reserva do Parque Infantil">
                    </div>
                    <div class="form-group mb-3">
                        <label for="booking_compose">Corpo:</label>
                        <textarea name="booking_compose" class="form-control" cols="30" rows="5" placeholder="Compor"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="booking_data">Data:</label>
                        <input type="datetime-local" name="booking_data" class="form-control">
                    </div>
                    <span class="d-flex justify-content-center">
                        <button class="btn btn-dark">Marcar</button>
                    </span>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="complaintModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
              </ul>

              <div class="condo-font card card-body shadow-card mt-3">
                <h5 class="d-flex justify-content-center mb-3"><strong>Reclamação</strong></h5>

                <form action="">
                    <div class="form-group mb-3">
                        <label for="">De: Helpidio Mateus</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Para: Coordenação do Condomínio</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="booking_subject">Assunto:</label>
                        <input type="text" class="form-control" name="booking_subject" placeholder="Ex: Reserva do Parque Infantil">
                    </div>
                    <div class="form-group mb-3">
                        <label for="booking_compose">Corpo:</label>
                        <textarea name="booking_compose" class="form-control" cols="30" rows="5" placeholder="Compor"></textarea>
                    </div>
                    <span class="d-flex justify-content-center">
                        <button class="btn btn-dark">Enviar</button>
                    </span>
                </form>
              </div>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
                <ul class="navbar-nav">
                    <li class="nav-link">
                        <div class="d-flex justify-content-end">
                            <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                                <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                            <div class="zoom-effect">
                                <img src="{{ asset('/icon/logo.svg') }}" width="35">
                                <span>ConGest</span>
                            </div>
                        </a>
                    </li>
                    <div class="separator-black rounded-pill mt-3"></div>
                  </ul>

                  <div class="condo-font card card-body shadow-card mt-3">
                    <h5 class="d-flex justify-content-center mb-3"><strong>Mensagem</strong></h5>

                    <form action="">
                        <div class="form-group mb-3">
                            <label for="">De: Helpidio Mateus</label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="resident_message">Para:</label>
                            <select name="resident_message" class="form-control">
                                <option value="">--Escolher--</option>
                                <option value="Coordenação do Condomínio">Coordenação do Condomínio</option>
                                <option value="Portaria">Portaria</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="booking_subject">Assunto:</label>
                            <input type="text" class="form-control" name="booking_subject" placeholder="Ex: Reserva do Parque Infantil">
                        </div>
                        <div class="form-group mb-3">
                            <label for="booking_compose">Corpo:</label>
                            <textarea name="booking_compose" class="form-control" cols="30" rows="5" placeholder="Compor"></textarea>
                        </div>
                        <span class="d-flex justify-content-center">
                            <button class="btn btn-dark">Enviar</button>
                        </span>
                    </form>
                  </div>
                  </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="feeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
              </ul>
            <div class="condo-font card card-body shadow-card mt-3">
                <h5 class="d-flex justify-content-center mb-3"><strong>Carregar Comprovativo</strong></h5>
                <form action="" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="receipt" class="form-control" accept=".pdf, image/jpeg, image/heic">
                    <p><small class="text-muted">Formatos aceites: PDF, JPEG, HEIC</small></p>
                    <button class="btn btn-success" type="submit">Carregar Comprovativo</button>
                </form>

            </div>
            <div class="condo-font card card-body shadow-card mt-3">
                <h5 class="d-flex justify-content-center mb-3"><strong>Comprovativos</strong></h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Mês</th>
                                <th>Comprovativo</th>
                                <th>Validado</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="correspondenceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
                <div class="condo-font card card-body shadow-card mt-3">
                    <h5 class="d-flex justify-content-center mb-3"><strong>Minhas Correspondências</strong></h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Pedido Para dar Festa no Parque</td>
                                    <td>Quero Pedir para dar festa no parque</td>
                                    <td>Portaria</td>
                                    <td>10/05/2023, 12:40</td>
                                </tr>
                                <tr>
                                    <td>Pedido Para dar Festa no Parque</td>
                                    <td>Quero Pedir para dar festa no parque</td>
                                    <td>Portaria</td>
                                    <td>10/05/2023, 12:40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="showBookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
                <div class="condo-font card card-body shadow-card mt-3">
                    <h5 class="d-flex justify-content-center mb-3"><strong>Minhas Reservas</strong></h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Pedido Para dar Festa no Parque</td>
                                    <td>Quero Pedir para dar festa no parque</td>
                                    <td>10/05/2023, 12:40</td>
                                </tr>
                                <tr>
                                    <td>Pedido Para dar Festa no Parque</td>
                                    <td>Quero Pedir para dar festa no parque</td>
                                    <td>10/05/2023, 12:40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="showComplaintModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
                <div class="condo-font card card-body shadow-card mt-3">
                    <h5 class="d-flex justify-content-center mb-3"><strong>Minhas Reclamações</strong></h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Pedido Para dar Festa no Parque</td>
                                    <td>Quero Pedir para dar festa no parque</td>
                                    <td>10/05/2023, 12:40</td>
                                </tr>
                                <tr>
                                    <td>Pedido Para dar Festa no Parque</td>
                                    <td>Quero Pedir para dar festa no parque</td>
                                    <td>10/05/2023, 12:40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="emergencyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle-black.svg')}}" width="40">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-black d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="separator-black rounded-pill mt-3"></div>
              </ul>
              <div class="condo-font card card-body shadow-card mt-3">
                <h5 class="d-flex justify-content-center mb-3"><strong>Contatos de Emergência</strong></h5>
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
