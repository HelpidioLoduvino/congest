@extends('main_resident')

@section('content')
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Mensagens</h4>
        <div class="vertical-separator mt-5"></div>
        <div class="d-flex mt-5">
            <span>

                <span style="color: #0042aa; margin-left: 10px;">
                    @php
                    setlocale(LC_TIME, 'pt_BR');
                    echo strftime('%A');
                @endphp,
                </span>

                @php
                    echo date('d')
                @endphp,

                @php
                setlocale(LC_TIME, 'pt_BR');
                echo strftime('%B');
                @endphp,

                <span style="margin-right: 10px;">
                    @php
                    echo date('Y')
                 @endphp

                </span>
            </span>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="chatbox mt-3"style="margin-left: 50px;">
                <ul class="chatbox-list-icons">
                    <li style="margin-right: 90px;">
                        <div class="d-flex">
                            <div class="esphere-green" style="margin-left: 20px;"></div>
                            <h4 class="title" style="color: #0042aa; ">Chat</h4>
                        </div>
                    </li>
                </ul>
                <div class="container mt-4">
                    <ul style="list-style: none; display:flex;">
                        <li>
                            <img src="{{asset('icon/user.svg')}}" width="40">
                        </li>
                        @if ($condo_name)
                            <li style="margin-top:10px; margin-left:10px;">
                                <strong>{{$condo_name->condo_name}}</strong>
                            </li>
                        @endif
                    </ul>
                    <hr class="mt-2">
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="message-chat-box mt-3">
                <ul class="user-chat">
                    <li>
                        <img src="{{asset('icon/user.svg')}}" width="40">
                    </li>
                    @if ($condo_name)
                    <li style="margin-left: 10px; margin-top:10px;"><strong>{{$condo_name->condo_name}}</> </strong></li>
                    <li style="margin-left: 50vh;">
                        <div class="dropdown">
                            <a href="#" class="no-border-on-click" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('icon/more-circle-horizontal.svg')}}" alt="" width="30">
                            </a>
                            <ul class="dropdown-menu mt-1">
                                <li><a class="dropdown-item" href="#">Apagar Chat</a></li>
                                <li><a class="dropdown-item" href="#">Ficheiros</a></li>
                              </ul>
                        </div>
                    </li>
                </ul>
                <div class="container mt-4">
                    <div class="message-sepatator mb-3"></div>
                    <div class="message-scrollview mb-3" style="overflow: auto; max-height: 300px;">
                        <ul class="received-message">
                        @if ($messages->isNotEmpty())
                            @foreach ($messages as $message)
                            <li>
                                <div class="card card-body mb-3" style="
                                    max-width: 50vh;
                                    background-color:rgba(220, 220, 220, 0.455);
                                    border-bottom-left-radius: 50px;
                                    border-top-right-radius: 50px;">
                                    <p>{{$message->message}}</p>
                                    <small class="text-muted d-flex justify-content-end">{{$message->time}}</small>
                                </div>
                            </li>
                            @endforeach
                        @else
                            <h5 class="d-flex justify-content-center">Iniciar chat</h5>
                            <br><br><br><br><br><br><br><br><br>
                        @endif
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <form action="/enviar-mensagem" method="post">
                        @csrf
                        <input type="hidden" name="condo_id" value="{{$condo_name->id}}">
                        <input type="hidden" name="user_id" value="{{$condo_name->resident_id}}">
                        <input type="hidden" name="time" value="<?php echo date('H:i:s', strtotime('now +1 hour')); ?>">
                        <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
                        <ul style="list-style: none; display:flex;">
                            <textarea class="form-control me-2" name="message" cols="40" rows="2" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);"></textarea>
                            <input type="image" src="{{asset('icon/send.svg')}}" width="30">
                        </ul>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
