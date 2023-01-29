@extends('dashboard.layout.main')

@section('subtitle', 'Adicionar Feriado')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Adicionar Feriados de {{ date('Y') }}</h4>
                <p class="card-text">Para inserir um novo feriado, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('holidays.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="day">Dia:</label>
                            <select name="day" id="day" class="form-control select2">
                                <option selected disabled>Selecione o Dia</option>
                                @for($day = 1; $day <= 31; $day++)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="month">Mês:</label>
                            <select name="month" id="month" class="form-control select2">
                                <option selected disabled>Selecione o Mês</option>
                                @foreach($months as $month)
                                    <option value="{{ $month['mes'] }}">{{ $month['nome'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="checkbox my-2 mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="is_repeated" value="1" class="custom-control-input" id="is_repeated">
                            <label class="custom-control-label" for="is_repeated">Evento Repetido</label>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="year" hidden>Ano:</label>
                        <input type="number" class="form-control" name="year" id="year" maxlength="4" value="{{ date('Y') }}" hidden>
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Adicionar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
