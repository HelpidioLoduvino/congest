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
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($bookings))
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->name}}
                                </a>
                            </td>
                            <td class="uppercase-text">
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->plot_resident}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->residency_number}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->subject}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->booking_date}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
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

<script>
    function redirectToResidentBooking(id) {
        var url = '/reserva-morador/' + id;
        window.location.href = url;
    }
</script>

@endsection
