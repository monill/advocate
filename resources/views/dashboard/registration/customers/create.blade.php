@extends('dashboard.layout.main')

@section('subtitle', 'Adidionar Cliente')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Adicionar Cliente</h4>
                <p class="card-text">Para inserir um novo feriado, basta preencher os dados abaixo.</p>
            </div>
            <div class="card-body">
                @includeIf('errors.errors', [$errors])
                @include('errors.messages')
                <form class="form form-vertical" action="{{ route('holidays.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="day">Pessoa</label>
                            <select name="day" id="day" class="form-control select2">
                                <option disabled="disabled" selected="selected">Selecione...</option>
                                <option value="1">Física</option>
                                <option value="2">Jurídica</option>
                                <option value="0">Não definido</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Nome/Razão Social</label>
                            <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="name">Apelido/Nome Fantasia</label>
                            <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="name">CPF/CNPJ</label>
                            <input type="text" class="form-control" name="name" id="name" maxlength="250" placeholder="Nome">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="IE_RG">RG/Inscrição Estadual</label>
                            <input type="text" class="form-control" id="fieldIE_RG" name="IE_RG" maxlength="20" placeholder="RG/Inscrição Estadual">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="RG_Orgao">Orgão Emissor</label>
                            <select class="form-control" id="fieldRG_Orgao" name="RG_Orgao">
                                <option selected="selected"></option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="RG_Emissao">Data Emissão</label>
                            <input type="text" class="form-control" id="fieldRG_Emissao" name="RG_Emissao" >
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="IM_Titulo">Título de Eleitor/Inscrição Municipal</label>
                            <input type="text" class="form-control" id="fieldIM_Titulo" name="IM_Titulo">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="Nascimento">Data de Nascimento/Data Abertura</label>
                            <input type="text" class="form-control" id="fieldNascimento" name="Nascimento">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="Cod_Sexo">Sexo</label>
                            <select class="form-control" id="fieldCod_Sexo" name="Cod_Sexo">
                                <option selected="selected" class="not_selected"></option>
                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="Cod_Estado_Civil">Estado Civil</label>
                            <select class="form-control" id="fieldCod_Estado_Civil" name="Cod_Estado_Civil">
                                <option selected="selected" class="not_selected"></option>
                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="Conjuge">Cônjuge</label>
                            <input type="text" class="form-control" id="fieldConjuge" name="Conjuge">
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="Filiacao1">Mãe / Filiação 1</label>
                            <input type="text" class="form-control" id="fieldFiliacao1" name="Filiacao1">
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="Filiacao2">Pai / Filiação 2									</label>
                            <input type="text" class="form-control" id="fieldFiliacao2" name="Filiacao2">
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="Email">E-mail</label>
                            <input type="text" class="form-control" id="fieldEmail" name="Email">
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="Cod_Estado">Estado (Naturalidade)/Estado (Origem)</label>
                            <select class="form-control" id="fieldCod_Estado" name="Cod_Estado">
                                <option selected="selected" class="not_selected"></option>
                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="Cod_Cidade">Cidade (Naturalidade)/Cidade (Origem)</label>
                            <select class="form-control" id="fieldCod_Cidade" name="Cod_Cidade">
                                <option selected="selected" class="not_selected"></option>
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="Observacoes">Observações</label>
                            <textarea type="" class="form-control" id="fieldObservacoes" name="Observacoes"></textarea>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary mr-1">Adicionar</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
