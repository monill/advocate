@extends('dashboard.layout.main')

@section('subtitle', 'Adicionar Impresso')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Adicionar Impresso</h4>
                <p class="card-text">Para inserir um novo impresso, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('printings.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <label for="content">Conteúdo:</label>
                        <textarea class="form-control" name="content" id="content" rows="20"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Adicionar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('vuexy/vendors/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#content',
            language: 'pt_BR',
        });
    </script>
@endsection
