@extends('dashboard.layout.main')

@section('subtitle', 'Editar Método de Pagamento')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editar Método de Pagamento</h4>
                <p class="card-text">Para alterar método de pagamento, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('payment-methods.update', $method->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="100" placeholder="Nome" value="{{ $method->name }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Editar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
