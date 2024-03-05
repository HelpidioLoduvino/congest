<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

</head>

<body class="condo-background">

    <nav class="condo-navbar navbar navbar-expand-md">

        <a class="navbar-link" style="margin-left: 20px;">
            <img src="{{ asset('/icon/logo2.svg') }}" width="35">
            <span>ConGest</span>
        </a>

        <button class="btn" data-bs-toggle="modal" data-bs-target="#menuModal">
            <img class="hover-image" src="{{asset('/icon/menu.svg')}}" width="35">
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
                    <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#messageModal">
                        <div class="zoom-effect">
                            <img class="hover-image" src="{{ asset('/icon/message.svg') }}" width="25">
                            Enviar Mensagem
                        </div>
                    </a>
                </li>

                <li class="nav-item" style="margin-right:20px;">
                    <a class="navbar-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#profileModal">
                        <div class="zoom-effect">
                            <img class="hover-image" src="{{ asset('/icon/profile.svg') }}" width="25">
                            Meu Perfil
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-md-none d-flex">
            <ul class="navbar-nav">
                <li class="nav-item d-flex">
                    <a class="nav-link" style="margin-left:60px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#bookingModal">
                        <img class="hover-image" src="{{ asset('/icon/reservation.svg') }}" width="35">
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-md-none d-flex">
            <ul class="navbar-nav">
                <li class="nav-item d-flex">
                    <a class="nav-link" style="margin-right: 5px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#messageModal">
                        <img class="hover-image" src="{{ asset('/icon/message.svg') }}" width="35">
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-md-none d-flex">
            <ul class="navbar-nav">
                <li class="nav-item d-flex">
                    <a class="nav-link" style="margin-right:20px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#profileModal">
                        <img class="hover-image" src="{{ asset('/icon/profile.svg') }}" width="35">
                    </a>
                </li>
            </ul>
        </div>

    </nav>

    <div class="col">
        <div class="row">
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
          <div class="modal-content" style="background-color: #2F3651">
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
                                Mensagens
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
                                <form action="/logout" method="post">
                                    @csrf
                                    <div class="d-flex">
                                        <input class="hover-image" type="image" src="{{ asset('/icon/logout.svg') }}" alt="" width="30">
                                        Sair
                                    </div>
                                </form>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>

      @if ($resident)

      <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content" style="background-color: #24293E;">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="35">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="condo-separator rounded-pill mt-3"></div>
              </ul>

              <div class="condo-font card card-body shadow-card mt-3" style="
              background-color: #2F3651;
              color:white;
              max-width: 500px;
              margin: auto;">
                <h5 class="d-flex justify-content-center mb-3"><strong>Marcar Reserva</strong></h5>

                <form action="/fazer-reserva" method="post">
                    @csrf
                    <input type="hidden" name="condo_id" value="{{$resident->condo_id}}">
                    <input type="hidden" name="user_id" value="{{session('id')}}">

                    <div class="form-group mb-3">
                        <label for="subject">Assunto:</label>
                        <input type="text" class="form-control" name="subject" placeholder="Ex: Reserva do Parque Infantil"
                        style="background-color:rgb(255, 245, 225);">
                    </div>
                    <div class="form-group mb-3">
                        <label for="booking">Corpo:</label>
                        <textarea name="booking" class="form-control" cols="30" rows="5" placeholder="Compor"
                        style="background-color:rgb(255, 245, 225);"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="booking_date">Data:</label>
                        <input type="datetime-local" name="booking_date" class="form-control"
                        style="background-color:rgb(255, 245, 225);">
                    </div>
                    <span class="d-flex justify-content-center">
                        <button class="btn btn-danger" type="submit">Marcar</button>
                    </span>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content" style="background-color: #24293E;">
            <div class="modal-body">
                <ul class="navbar-nav">
                    <li class="nav-link">
                        <div class="d-flex justify-content-end">
                            <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                                <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="35">
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                            <div class="zoom-effect">
                                <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                                <span>ConGest</span>
                            </div>
                        </a>
                    </li>
                    <div class="condo-separator rounded-pill mt-3"></div>
                  </ul>

                  <div class="condo-font card card-body shadow-card mt-3" style="
                  background-color: #2F3651;
                  color:white;
                  max-width: 500px;
                  margin: auto;">
                    <h5 class="d-flex justify-content-center mb-3"><strong>Mensagem</strong></h5>

                    <form action="/enviar-mensagem" method="post">
                        @csrf
                        <input type="hidden" name="condo_id" value="{{$resident->condo_id}}">
                        <input type="hidden" name="user_id" value="{{session('id')}}">
                        <div class="form-group mb-3">
                            <label for="receiver">Para:</label>
                            <select name="receiver" class="form-control"
                            style="background-color:rgb(255, 245, 225);">
                                <option value="">--Escolher--</option>
                                <option value="Coordenação do Condomínio">Coordenação do Condomínio</option>
                                <option value="Portaria">Portaria</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject">Assunto:</label>
                            <input type="text" class="form-control" name="subject" placeholder="Ex: Reserva do Parque Infantil"
                            style="background-color:rgb(255, 245, 225);">
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Corpo:</label>
                            <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Compor"
                            style="background-color:rgb(255, 245, 225);"></textarea>
                        </div>
                        <span class="d-flex justify-content-center">
                            <button class="btn btn-danger" type="submit">Enviar</button>
                        </span>
                    </form>
                  </div>
                  </ul>
            </div>
          </div>
        </div>
      </div>

      @endif

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

      <div class="modal fade" id="feeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
          <div class="modal-content" style="background-color: #24293E;">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="35">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="condo-separator rounded-pill mt-3"></div>
              </ul>
            <div class="condo-font card card-body shadow-card mt-3"
            style="
            background-color:#2F3651;
            color:white;
            max-width: 500px;
            margin: auto;">
                <h5 class="d-flex justify-content-center mb-3"><strong>Carregar Comprovativo</strong></h5>
                <form action="" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="receipt" class="form-control" accept=".pdf, image/jpeg, image/heic"
                    style="background-color: rgb(255, 245, 225);">
                    <p><small class="">Formatos aceites: PDF, JPEG, HEIC</small></p>
                    <button class="btn btn-warning" type="submit">Carregar Comprovativo</button>
                </form>

            </div>
            <div class="condo-font card card-body shadow-card mt-3"
            style="
            background-color: rgb(255, 245, 225);
            max-width: 800px;
            margin: auto;">
                <h5 class=" mb-3"><strong>Comprovativos</strong></h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="background-color: goldenrod; color:white;">Mês</th>
                                <th style="background-color: goldenrod; color:white;">Comprovativo</th>
                                <th style="background-color: goldenrod; color:white;">Validado</th>
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
          <div class="modal-content" style="background-color: #24293E;">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="35">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="condo-separator rounded-pill mt-3"></div>
                <div class="condo-font card card-body shadow-card mt-3" style="
                background-color: rgb(255, 245, 225);">
                    <h5 class="d-flex justify-content-center mb-3"><strong>Minhas Mensagens</strong></h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="background-color: goldenrod; color:white;">Assunto</th>
                                    <th style="background-color: goldenrod; color:white;">Destinatário</th>
                                    <th style="background-color: goldenrod; color:white;">Data de Envio</th>
                                    <th style="background-color: goldenrod; color:white;">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($messages->isNotEmpty())
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td style="background-color: rgb(255, 245, 225);">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#showMyMessage{{$message->id}}">
                                                    {{$message->subject}}
                                                </a>
                                            </td>
                                            <td style="background-color: rgb(255, 245, 225);">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#showMyMessage{{$message->id}}">
                                                    {{$message->receiver}}
                                                </a>
                                            </td>
                                            <td style="background-color: rgb(255, 245, 225);">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#showMyMessage{{$message->id}}">
                                                    {{$message->date}}
                                                </a>
                                            </td>
                                            <td style="background-color: rgb(255, 245, 225);">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#showMyMessage{{$message->id}}">
                                                    {{$message->status}}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
          <div class="modal-content" style="background-color: #24293E;">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="35">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="condo-separator rounded-pill mt-3"></div>
                <div class="condo-font card card-body shadow-card mt-3" style="
                background-color: rgb(255, 245, 225);">
                    <h5 class="d-flex justify-content-center mb-3"><strong>Minhas Reservas</strong></h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="background-color: goldenrod; color:white;">Assunto</th>
                                    <th style="background-color: goldenrod; color:white;">Data De Reserva</th>
                                    <th style="background-color: goldenrod; color:white;">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($bookings->isNotEmpty())
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td style="background-color: rgb(255, 245, 225);">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#showMyBooking{{$booking->id}}">
                                                    {{$booking->subject}}
                                                </a>
                                            </td>
                                            <td style="background-color: rgb(255, 245, 225);">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#showMyBooking{{$booking->id}}">
                                                    {{$booking->booking_date}}
                                                </a>
                                            </td>
                                            <td style="background-color: rgb(255, 245, 225);">
                                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#showMyBooking{{$booking->id}}">
                                                    {{$booking->status}}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
          <div class="modal-content" style="background-color: #24293E;">
            <div class="modal-body">
              <ul class="navbar-nav">
                <li class="nav-link">
                    <div class="d-flex justify-content-end">
                        <button class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img class="hover-image" src="{{asset('/icon/close-circle.svg')}}" width="35">
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                        <div class="zoom-effect">
                            <img src="{{ asset('/icon/logo.svg') }}" width="35">
                            <span>ConGest</span>
                        </div>
                    </a>
                </li>
                <div class="condo-separator rounded-pill mt-3"></div>
              </ul>
              <div class="condo-font card card-body shadow-card mt-3" style="
              background-color: rgb(255, 245, 225);">
                <h5 class="d-flex justify-content-center mb-3"><strong>Contatos de Emergência</strong></h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      @if ($messages->isNotEmpty())
          @foreach ($messages as $message)
          <div class="modal fade" id="showMyMessage{{$message->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <li class="nav-item">
                        <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                            <div class="zoom-effect">
                                <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                                <span>ConGest</span>
                            </div>
                        </a>
                    </li>
                    <div class="condo-separator rounded-pill mt-3"></div>
                    <h5 class="mt-3">Destinatário: <strong>{{$message->receiver}}</strong></h5>
                    <h5>Assunto: <strong>{{$message->subject}}</strong></h5>
                    <p>{{$message->message}}</p>
                    <p>Data De Envio: {{$message->date}}</p>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      @endif

      @if ($bookings->isNotEmpty())
          @foreach ($bookings as $booking)
          <div class="modal fade" id="showMyBooking{{$booking->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <li class="nav-item">
                        <a class="logo-text-white d-flex justify-content-center" style="margin-left: 20px;">
                            <div class="zoom-effect">
                                <img src="{{ asset('/icon/logo2.svg') }}" width="35">
                                <span>ConGest</span>
                            </div>
                        </a>
                    </li>
                    <div class="condo-separator rounded-pill mt-3"></div>
                  </ul>
                  <h5 class="mt-3">Assunto: {{$booking->subject}}</h5>
                  <h5>Data De Reserva: {{$booking->booking_date}}</h5>
                  <p>{{$booking->booking}}</p>
                  <p>Data De Envio: {{$booking->date}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      @endif

    <script src="/bootstrap/script/popper.js"></script>
    <script src="/bootstrap/script/bootstrap.min.js"></script>
    <script src="/jquery/jquery.min.js"></script>

</body>

</html>
