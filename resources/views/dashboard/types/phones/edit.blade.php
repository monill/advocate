@extends('dashboard.layout.main')

@section('subtitle', 'Editar Telefones')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editar Telefones</h4>
                <p class="card-text">Para alterar tipo de telefones, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('phones.update', $type->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Nome" maxlength="250" value="{{ $type->name }}" />
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Editar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
