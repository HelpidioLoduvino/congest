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
                            <td>{{$complaint->name}}</td>
                            <td class="uppercase-text">{{$complaint->plot_resident}}</td>
                            <td>{{$complaint->residency_number}}</td>
                            <td>{{$complaint->subject}}</td>
                            <td>{{$complaint->date}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<script>
document.getElementById('clickableBody').addEventListener('click', function() {
    window.location.href = '/reclamação';
});
</script>



@endsection
