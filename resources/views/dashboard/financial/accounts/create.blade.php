@extends('dashboard.layout.main')

@section('subtitle', 'Adicionar Conta')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Adicionar Conta</h4>
                <p class="card-text">Para inserir uma nova conta, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('accounts.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="bank_id">Banco:</label>
                        <select name="bank_id" id="bank_id" class="form-control select2">
                            <option>Selecione</option>
                            @foreach($banks as $bank)
                                <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <label for="agency">Agência:</label>
                        <input type="text" class="form-control" name="agency" id="agency" maxlength="250" placeholder="Agência">
                    </div>
                    <div class="mb-3">
                        <label for="account_number">Conta:</label>
                        <input type="text" class="form-control" name="account_number" id="account_number" maxlength="250" placeholder="Conta">
                    </div>
                    <div class="mb-3">
                        <label for="initial_balance">Balanço inicial:</label>
                        <input type="text" class="form-control" name="initial_balance" id="initial_balance" maxlength="250" placeholder="Balanço inicial">
                    </div>
                    <div class="mb-3">
                        <label for="observation">Observação:</label>
                        <input type="text" class="form-control" name="observation" id="observation" maxlength="250" placeholder="Observação">
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Adicionar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
