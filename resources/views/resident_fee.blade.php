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
        <table class="table table-striped" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <thead>
                <tr>
                    <th class="text-center">Morador</th>
                    <th class="text-center">Mês</th>
                    <th class="text-center">Comprovativo</th>
                    <th class="text-center">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Johelsa Mateus</td>
                    <td>Novembro</td>
                    <td>bai.pdf</td>
                    <td>Valido</td>
                </tr>
                <tr>
                    <td>Johelsa Mateus</td>
                    <td>Novembro</td>
                    <td>bai.pdf</td>
                    <td>Valido</td>
                </tr>
                <tr>
                    <td>Johelsa Mateus</td>
                    <td>Novembro</td>
                    <td>bai.pdf</td>
                    <td>Valido</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
