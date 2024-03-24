@extends('main_resident')

@section('content')
<div class="my-card d-md-block d-none mt-3" style="position: relative; overflow:hidden;">
    <nav class="navbar navbar-expand-lg">
        <h4 class="condo-title mt-5" style="margin-left: 50px;">Reservas</h4>
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
    <div style="overflow: auto; overflow-x:hidden; max-height: 500px; margin-right:50px;">
        <div class="mt-5" style="margin-left:50px;">
            <div class="d-flex">
                <div class="esphere-blue"></div>
                <h4 class="title">Marcar Reserva</h4>
            </div>
        </div>
        @if ($resident)
        <div class="card card-body border-0 mt-3" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); margin-left:50px;">
            <form action="/fazer-reserva" method="post">
                @csrf
                <input type="hidden" name="condo_id" value="{{$resident->condo_id}}">
                <input type="hidden" name="user_id" value="{{session('id')}}">
                <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
                <div class="form-group mb-3">
                    <label for="place">Espaço:</label>
                    <select name="place" class="form-control">
                        <option value="">-- Escolher --</option>
                        <option value="Piscína">Piscína</option>
                        <option value="Salão">Salão</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="purpose">Finalidade:</label>
                    <select name="purpose" class="form-control">
                        <option value="">-- Escolher --</option>
                        <option value="Aniversário">Aniversário</option>
                        <option value="Convívio">Convívio</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="booking_date">Data:</label>
                    <input type="datetime-local" name="booking_date" class="form-control">
                </div>
                <span class="d-flex justify-content-center">
                    <button class="btn btn-danger" type="submit">Marcar</button>
                </span>
            </form>
        </div>
        @endif
        <div class="mt-5">
            <div class="d-flex">
                <div class="esphere-green"></div>
                <h4 class="title">Minhas Reservas</h4>
            </div>
        </div>
        <div class="table-responsive" style="margin-left: 50px;">
            <table class="table table-striped" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
                <thead>
                    <tr>
                        <th class="text-center">Lugar</th>
                        <th class="text-center">Finalidade</th>
                        <th class="text-center">Data</th>
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($bookings))
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->place}}</td>
                            <td>{{$booking->purpose}}</td>
                            <td>{{$booking->booking_date}}</td>
                            <td>{{$booking->status}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
