@extends('main_condominio')

@section('content')
<h4 class="mt-3 title-font">Reclamações</h4>
<div class="condo-separator"></div>
<div class="condo-font card card-body shadow-card mt-3">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Morador</th>
                    <th>Bloco</th>
                    <th>nº Casa</th>
                    <th>Assunto</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($complaints))
                    @foreach ($complaints as $complaint)
                        <tr>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentComplaint('{{$complaint->id}}')">
                                    {{$complaint->name}}
                                </a>
                            </td>
                            <td class="uppercase-text">
                                <a href="#" class="nav-link" onclick="redirectToResidentComplaint('{{$complaint->id}}')">
                                    {{$complaint->plot_resident}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentComplaint('{{$complaint->id}}')">
                                    {{$complaint->residency_number}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentComplaint('{{$complaint->id}}')">
                                    {{$complaint->subject}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="nav-link" onclick="redirectToResidentComplaint('{{$complaint->id}}')">
                                    {{$complaint->date}}
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
    function redirectToResidentComplaint(id) {
        var url = '/reclamação-morador/' + id;
        window.location.href = url;
    }
</script>

@endsection
