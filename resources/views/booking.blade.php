@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Reservas</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Morador</th>
                    <th>Bloco</th>
                    <th>nº da Casa</th>
                    <th>Assunto</th>
                    <th>Data De Reserva</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($bookings))
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->name}}</td>
                            <td class="uppercase-text">{{$booking->plot_resident}}</td>
                            <td>{{$booking->residency_number}}</td>
                            <td>{{$booking->subject}}</td>
                            <td>{{$booking->booking_date}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
