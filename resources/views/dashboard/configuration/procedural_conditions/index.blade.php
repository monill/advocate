@extends('dashboard.layout.main')

@section('subtitle', 'Condições Processuais')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('procedural-conditions.create') }}" class="btn btn-primary pull-right">Adicionar</a>
                <h4 class="card-title">Condições Processuais</h4>
                <p class="card-text">Gerencie aqui as condições processuais presentes no website.</p>
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
                    @foreach($conditions as $condition)
                        <tr>
                            <td>{{ $condition->name }}</td>
                            <td>
                                <a href="{{ route('procedural-conditions.edit', $condition->id) }}" data-toggle="tooltip" data-original-title="Editar">
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
