@extends('dashboard.layout.main')

@section('subtitle', 'Editar Conta')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editar Conta</h4>
                <p class="card-text">Para alterar uma conta, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('accounts.update', $account->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="bank_id">Banco:</label>
                        <select name="bank_id" id="bank_id" class="form-control select2">
                            <option disabled>Selecione</option>
                            @foreach($banks as $bank)
                                <option value="{{ $bank->id }}" {{ $account->bank_id == $bank->id ? 'selected' : '' }}>
                                    {{ $bank->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome" value="{{ $account->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="agency">Agência:</label>
                        <input type="text" class="form-control" name="agency" id="agency" maxlength="250" placeholder="Agência" value="{{ $account->agency }}">
                    </div>
                    <div class="mb-3">
                        <label for="account_number">Conta:</label>
                        <input type="text" class="form-control" name="account_number" id="account_number" maxlength="250" placeholder="Conta" value="{{ $account->account_number }}">
                    </div>
                    <div class="mb-3">
                        <label for="initial_balance">Balanço inicial:</label>
                        <input type="text" class="form-control" name="initial_balance" id="initial_balance" maxlength="250" placeholder="Balanço inicial" value="{{ $account->initial_balance }}">
                    </div>
                    <div class="mb-3">
                        <label for="observation">Observação:</label>
                        <input type="text" class="form-control" name="observation" id="observation" maxlength="250" placeholder="Observação" value="{{ $account->observation }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Editar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
