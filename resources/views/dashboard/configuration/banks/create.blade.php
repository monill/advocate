@extends('dashboard.layout.main')

@section('subtitle', 'Adicionar Banco')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Adicionar Banco</h4>
                <p class="card-text">Para inserir um novo banco, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="theme-form" action="{{ route('banks.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="code">Código:</label>
                        <input type="text" class="form-control" name="code" id="code" maxlength="10" placeholder="Código">
                    </div>
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="100" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <label for="ispb">ISPB:</label>
                        <input type="text" class="form-control" name="ispb" id="ispb" maxlength="10" placeholder="ISPB">
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Adicionar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
