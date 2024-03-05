@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font white-text">Mensagens</h4>
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
                    <th style="background-color:rgb(255, 245, 225);">Data</th>
                    <th style="background-color:rgb(255, 245, 225);">Estado</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($messages))
                    @foreach ($messages as $message)
                        <tr>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->name}}
                                </a>
                            </td>
                            <td class="uppercase-text" style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->plot_resident}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->residency_number}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->subject}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->date}}
                                </a>
                            </td>
                            <td style="background-color: goldenrod; color: white;">
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->status}}
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
    function redirectToResidentMessage(id) {
        var url = '/mensagem-morador/' + id;
        window.location.href = url;
    }
</script>

@endsection
