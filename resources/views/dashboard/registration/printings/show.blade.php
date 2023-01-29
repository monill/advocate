@extends('dashboard.layout.main')

@section('subtitle', 'Impresso')

@section('content')

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Visualizar Impresso:</h5>
                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div>
            <div class="card-body">
                <p class="card-text lead mb-3 font-weight-bold">
                    Impresso: <b>{{ $print->name }}</b>
                </p>
                {!! $print->content !!}
            </div>
        </div>
    </div>

@endsection
