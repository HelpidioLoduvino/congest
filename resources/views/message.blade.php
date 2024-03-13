@extends('main_condominio')

@section('content')

<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Mensagens</h4>
        <div class="vertical-separator mt-5"></div>
        <div class="d-flex calendar-background mt-5">
            <span>

                <span style="color: goldenrod; margin-left: 10px;">
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
                    <li style="margin-right: 2px;">
                        <div class="dropdown">
                            <a href="#" class="no-border-on-click" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('icon/more-circle-horizontal.svg')}}" alt="" width="30">
                            </a>
                            <ul class="dropdown-menu">
                                <li style="margin: 0; padding:0;"><a class="dropdown-item" href="#">Apagar mensagens</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="no-border-on-click" href="#" role="button" data-bs-toggle="modal" data-bs-target="#showResident">
                            <img src="{{asset('icon/plus-circle-fill.svg')}}" width="26">
                        </a>
                    </li>
                </ul>

                <div class="container">
                    <form class="d-flex" role="search">
                        <div class="input-group mt-3">
                            <input class="form-control " type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: #ebebeb; height:30px; width:20px;">
                            <button class="btn btn-primary" type="submit" style="height: 30px;">
                                <img src="{{asset('icon/search.svg')}}" width="20" style="margin-bottom: 20px;">
                            </button>
                        </div>
                    </form>

                    <div class="chat mt-4" style="overflow-y: auto; max-height: 300px; overflow-x:hidden;">
                        <div class="col">
                            @if (!empty($messages))
                                @foreach ($messages as $message)
                                <div class="row">
                                    <a class="card-link" href="#" onclick="redirectToChat('{{$message->resident_id}}', '{{$message->owner_id}}')">
                                        <ul class="chat-message">
                                            <li style="margin-right:10px;">
                                                <img src="{{asset('icon/user.svg')}}" width="45">
                                            </li>
                                            <li> <strong>{{$message->name}}</strong> <br> <small class="text-muted">{{ implode(' ', array_slice(str_word_count($message->message, 1, 'àáãâéêíóôõúüç,'), 0, 5)) }}...</small></li>
                                        </ul>
                                    </a>
                                    <hr class="mt-2">
                                </div>
                                @endforeach
                            @else
                            <div class="container d-flex justify-content-center">
                                <small class="text-muted">Não tem nenhuma mensagem</small>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="message-chat-box mt-3">
                <h2 class="d-flex justify-content-center mt-5">Clique Para Ver Mensagem</h2>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="showResident" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 90vh; width: 50vh;">
            <div class="modal-body">
                <ul style="list-style: none; display: flex; margin:0; padding:0;">
                    <li><span> <strong>Novo Chat</strong></span></li>
                    <li>
                        <div class="close-btn mb-5" style="margin-left: 30vh;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                    </li>
                </ul>

                <div class="container">
                    <form class="d-flex" role="search">
                        <div class="input-group mt-3">
                            <input class="form-control " type="search" placeholder="Pesquisar morador" aria-label="Search" style="background-color: #ebebeb; height:30px; width:20px;">
                            <button class="btn btn-primary" type="submit" style="height: 30px;">
                                <img src="{{asset('icon/search.svg')}}" width="20" style="margin-bottom: 20px;">
                            </button>
                        </div>
                    </form>

                    <div class="col mt-5">
                        <div style="overflow: auto; max-height: 400px; overflow-x: hidden;">
                            @if (!empty($messages))
                                @foreach ($messages as $message)
                                <div class="row">
                                    <a class="card-link" href="#" onclick="redirectToChat('{{$message->resident_id}}', '{{$message->owner_id}}')">
                                        <ol class="chat-message">
                                            <li style="margin-right:10px;">
                                                <img src="{{asset('icon/user.svg')}}" width="40">
                                            </li>
                                            <li> <strong><p style="margin-top:5px;">{{$message->name}}</p></strong></li>
                                        </ol>
                                    </a>
                                    <hr class="mt-2">
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function redirectToChat(residentId, ownerId) {
        var url = '/mensagem-morador/' + residentId + '/' + ownerId;
        window.location.href = url;
    }
</script>

@endsection
