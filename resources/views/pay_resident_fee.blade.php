@extends('main_resident')

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
    </nav>

    <div class="container">
        <div style="overflow: auto; overflow-x:hidden; max-height: 500px;">
            <div class="mt-5">
                <div class="d-flex">
                    <div class="esphere-blue" style="margin-left: 50px;"></div>
                    <h4 class="title">Pagar Taxa do Condomínio</h4>
                </div>
            </div>
            <div class="card card-body mt-3" style="margin-left: 50px; margin-right: 50px;">
                <h6>Carregar Comprovativo</h6>
                <form action="/enviar-comprovativo" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($resident)
                        <input type="hidden" name="condo_id" value="{{$resident->condo_id}}">
                    @endif
                    <input type="hidden" name="resident_id" value="{{session('id')}}">
                    <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
                    <input type="hidden" name="month" value="<?php echo strftime('%B') ?>">
                    <input type="file" name="bank_receipt" accept="application/pdf" class="form-control mt-3">
                    <input type="submit" class="btn btn-warning mt-4" style="color: white;" value="Enviar">
                </form>
            </div>
            <div class="mt-5">
                <div class="d-flex">
                    <div class="esphere-green" style="margin-left: 50px;"></div>
                    <h4 class="title">Meus comprovativos</h4>
                </div>
            </div>
            <div class="table-responsive" style="margin-left: 50px; margin-right: 50px;">
                <table class="table table-hover">
                    <thead class="table-active">
                        <tr>
                            <th class="text-center">Mês</th>
                            <th class="text-center">Data</th>
                            <th class="text-center">Comprovativo</th>
                            <th class="text-center">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($bank_receipts->isNotEmpty())
                            @foreach ($bank_receipts as $receipt)
                                <tr>
                                    <td>
                                        <a class="nav-link" href="{{ route('visualizar_pdf', ['id' => $receipt->id]) }}">
                                            {{$receipt->month}}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="nav-link" href="{{ route('visualizar_pdf', ['id' => $receipt->id]) }}">
                                            {{$receipt->date}}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="nav-link" href="{{ route('visualizar_pdf', ['id' => $receipt->id]) }}">
                                            {{$receipt->bank_receipt}}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="nav-link" href="{{ route('visualizar_pdf', ['id' => $receipt->id]) }}">
                                            {{$receipt->status}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
