@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font white-text">Reservas</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3" style="background-color: goldenrod; color: white;">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="background-color:rgb(255, 245, 225);">Morador</th>
                    <th style="background-color:rgb(255, 245, 225);">Bloco</th>
                    <th style="background-color:rgb(255, 245, 225);">Casa</th>
                    <th style="background-color:rgb(255, 245, 225);">Assunto</th>
                    <th style="background-color:rgb(255, 245, 225);">Data De Reserva</th>
                    <th style="background-color:rgb(255, 245, 225);">Estado</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($bookings))
                    @foreach ($bookings as $booking)
                        <tr>
                            <td style="background-color: goldenrod; color: white;">
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->name}}
                                </a>
                            </td>
                            <td class="uppercase-text" style="background-color: goldenrod; color: white;">
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->plot_resident}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->residency_number}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->subject}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a href="#" class="nav-link" onclick="redirectToResidentBooking('{{$booking->id}}')">
                                    {{$booking->booking_date}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
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
