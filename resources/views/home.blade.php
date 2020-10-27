@extends('layouts.app')

@section('content')
<script>

    $(document).ready(function () {
        $('#myTable').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="myTable"class="tablesorter table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Id contrato</th>
                            <th>Client Id</th>
                            <th>Nombre</th>
                            </tr>
                    </thead>
                    <tbody>
                    @foreach($contratos as $contrato)
                        <tr>
                            <td>{{$contrato->id}}</td>
                            <td>{{$contrato->client_id}}</td>
                            <td>{{$contrato->client->name}}</td>
                        </tr>

                    @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
