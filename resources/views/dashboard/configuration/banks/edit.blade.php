@extends('dashboard.layout.main')

@section('subtitle', 'Editar Banco')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editar Banco</h4>
                <p class="card-text">Para alterar o banco, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('banks.update', $bank->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="code">Código:</label>
                        <input type="text" class="form-control" name="code" id="code" maxlength="10" placeholder="Código" value="{{ $bank->code }}">
                    </div>
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="100" placeholder="Nome" value="{{ $bank->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="ispb">ISPB:</label>
                        <input type="text" class="form-control" name="ispb" id="ispb" maxlength="10" placeholder="ISPB" value="{{ $bank->ispb }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Editar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
