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
                        <div class="dropdown">
                            <a class="no-border-on-click" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('icon/plus-circle-fill.svg')}}" width="26">
                            </a>
                            <ul class="dropdown-menu" style="margin: 0; padding: 0;">
                                <li style="margin: 0; padding:0;"><a class="dropdown-item" href="#">Nova Mensagem</a></li>
                            </ul>
                        </div>
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
                            @if (!empty($chats))
                                @foreach ($chats as $chat)
                                <div class="row">
                                    <a class="card-link" href="#" onclick="redirectToChat('{{$chat->resident_id}}', '{{$chat->owner_id}}')">
                                        <ul class="chat-message">
                                            <li style="margin-right:10px;">
                                                <img src="{{asset('icon/user.svg')}}" width="45">
                                            </li>
                                            <li> <strong><small></small> {{$chat->name}}</strong> <br> <small class="text-muted">{{ implode(' ', array_slice(str_word_count($chat->message, 1, 'àáãâéêíóôõúüç,'), 0, 5)) }}...</small></li>
                                        </ul>
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

        <div class="col-md-7">
            <div class="message-chat-box mt-3">
                <ul class="user-chat">
                    <li>
                        <img src="{{asset('icon/user.svg')}}" width="45">
                    </li>
                    @if (!empty($userInfo))
                        <li style="margin-left: 10px;"><strong> <small>{{$userInfo->name}}</small> </strong></li>
                    @endif
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
                            @if (!empty($messages))
                                @foreach ($messages as $message)
                                <li>
                                    <div class="card card-body mb-3" style="max-width: 100vh; background-color:gainsboro;">
                                        <p>{{$message->message}}</p>
                                        <small class="text-muted d-flex justify-content-end">{{$message->time}}</small>
                                    </div>
                                </li>
                                @endforeach
                            @endif
                        </ul>

                        <ul class="sent-message" style="list-style: none;">
                            @if (!empty($feedbacks))
                                @foreach ($feedbacks as $feedback)
                                <li>
                                    <div class="card card-body mb-3" style="max-width: 100vh; background-color: #73e600;">
                                        <p>{{$feedback->feedback}}</p>
                                        <small class="text-muted d-flex justify-content-end">{{$feedback->time}}</small>
                                    </div>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="container">
                    @if (!empty($userInfo))
                        <form action="/responder-mensagem" method="post">
                            @csrf
                            <ul style="list-style: none; display:flex;">
                                <input type="hidden" name="condo_id" value="{{$userInfo->condo_id}}">
                                <input type="hidden" name="resident_id" value="{{$userInfo->resident_id}}">
                                <textarea class="form-control me-2" name="feedback" cols="40" rows="2" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);"></textarea>
                                <input type="image" src="{{asset('icon/send.svg')}}" width="30">
                            </ul>
                        </form>
                    @endif
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
