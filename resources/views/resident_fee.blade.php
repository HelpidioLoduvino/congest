@extends('main_condominio')

@section('content')
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Financeiro</h4>
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
        <div class="collapse navbar-collapse d-md-flex justify-content-end mt-5">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right:50px;">
                    <div>
                        <form class="d-flex" role="search">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: #f5f5f5ba; height:30px; width:26vh;">
                                <button class="btn btn-primary" type="submit" style="height: 30px;">
                                    <img src="{{asset('icon/search.svg')}}" width="20" style="margin-bottom: 20px;">
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mt-5">
        <div class="d-flex">
            <div class="esphere-blue" style="margin-left: 50px;"></div>
            <h4 class="title">Comprovativos</h4>
        </div>
    </div>
    <div class="table-responsive" style="margin-left: 50px; margin-right: 50px;">
        <table class="table table-hover" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <thead class="table-active">
                <tr>
                    <th class="text-center">Morador</th>
                    <th class="text-center">Mês</th>
                    <th class="text-center">Comprovativo</th>
                    <th class="text-center">Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($bank_receipts->isNotEmpty())
                    @foreach ($bank_receipts as $receipt)
                        <tr>
                            <td>
                                <a class="nav-link" href="{{route('visualizar_pdf', ['id' => $receipt->id] )}}">
                                    {{$receipt->name}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="{{route('visualizar_pdf', ['id' => $receipt->id] )}}">
                                    {{$receipt->month}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="{{route('visualizar_pdf', ['id' => $receipt->id] )}}">
                                    {{$receipt->bank_receipt}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="{{route('visualizar_pdf', ['id' => $receipt->id] )}}">
                                    {{$receipt->status}}
                                </a>
                            </td>
                            <td>
                                <ul style="display:flex; list-style:none;">
                                    <li>
                                        <form action="/validar-comprovativo" method="post">
                                            @csrf
                                            <input type="hidden" name="receipt_id" value="{{$receipt->id}}">
                                            <button class="btn btn-success" type="submit">
                                                <i class="fa-solid fa-check"></i>
                                            </button>
                                        </form>
                                    </li>
                                    &nbsp;&nbsp;
                                    <li>
                                        <form action="/invalidar-comprovativo" method="post">
                                            @csrf
                                            <input type="hidden" name="receipt_id" value="{{$receipt->id}}">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
