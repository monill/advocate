@extends('dashboard.layout.main')

@section('subtitle', 'Adicionar Orgão Emissor')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Adicionar Orgão Emissor</h4>
                <p class="card-text">Para inserir um novo orgão emissor, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('issuing-institutions.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome">
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Adicionar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
