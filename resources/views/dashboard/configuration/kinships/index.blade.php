@extends('dashboard.layout.main')

@section('subtitle', 'Parentescos')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kinships.create') }}" class="btn btn-primary pull-right">Adicionar</a>
                <h4 class="card-title">Parentescos</h4>
                <p class="card-text">Gerencie aqui os parentescos presentes no website.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <table class="table table-bordered table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($kinships as $kinship)
                        <tr>
                            <td>{{ $kinship->name }}</td>
                            <td>
                                <a href="{{ route('kinships.edit', $kinship->id) }}" data-toggle="tooltip" data-original-title="Editar">
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
