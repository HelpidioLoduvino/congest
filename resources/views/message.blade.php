@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Mensagens</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Morador</th>
                    <th>Bloco</th>
                    <th>Casa</th>
                    <th>Assunto</th>
                    <th>Data</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($messages))
                    @foreach ($messages as $message)
                        <tr>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->name}}
                                </a>
                            </td>
                            <td class="uppercase-text">
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->plot_resident}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->residency_number}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->subject}}
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick="redirectToResidentMessage('{{$message->id}}')">
                                    {{$message->date}}
                                </a>
                            </td>
                            <td>
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
