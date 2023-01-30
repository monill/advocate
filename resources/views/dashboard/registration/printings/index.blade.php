@extends('dashboard.layout.main')

@section('subtitle', 'Impressos')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('printings.create') }}" class="btn btn-primary pull-right">Adicionar</a>
                <h4 class="card-title">Impressos</h4>
                <p class="card-text">Gerencie aqui os impressos presentes no website.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <table class="table table-bordered table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>Título</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prints as $print)
                        <tr>
                            <td>{{ $print->name }}</td>
                            <td>
                                <a href="{{ route('printings.show', $print->id) }}" data-toggle="tooltip" data-original-title="Visualizar">
                                    <i data-feather="eye-2" class="mr-50 text-info"></i>
                                </a>
                                <a href="{{ route('printings.edit', $print->id) }}" data-toggle="tooltip" data-original-title="Editar">
                                    <i data-feather="edit" class="m-r-5 text-success"></i>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-original-title="Deletar">
                                    <i data-feather="trash-2" class="mr-4 text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
