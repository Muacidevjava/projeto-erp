@extends('template')
@section('conteudo')
    <div class="rows">
        <div class="col-12">
            <span class=" bg-title text-light text-uppercase h5 mb-3 text-branco">
                <svg class="icon cadastro" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                        stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                CADASTRAR FORNECEDOR
            </span>
        </div>

        <div class="col-12">

            <div id="tab">
                @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form
                    action="{{ isset($fornecedor) ? route('fornecedor.update', $fornecedor->id) : route('fornecedor.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($fornecedor))
                        @method('PUT')
                    @endif


                    <div class="col-12 mb-4">
                        <fieldset>
                            <legend>Pesquisar Por CNPJ</legend>
                            <div class="rows center-middle">

                                <div class="col-6 mb-3" id="div_pesquisar">
                                    <label class="text-label">Pesquisa CNPJ</label>
                                    <div class="grupo-form-btn">
                                        <input type="text" id="codigocnpj" class="form-campo mascara-cnpj">
                                    </div>
                                </div>
                                <div class="col-2 mt-4 mb-3">
                                    <input type="button" onclick="buscarCNPJ()" value="Pesquisar CNPJ"
                                        class="width-100 btn btn-roxo d-block m-auto">
                                </div>
                            </div>
                        </fieldset>

                    </div>

                    <div id="tab-1">
                        <div class="p-2">
                            <span class="d-block mt-0 mb-4 border-bottom text-uppercase pb-1">Informações básicas</span>
                            <div class="rows">
                                <div class="col-6 mb-3">
                                    <label class="text-label" id="lblRazaoSocial">Razão Social<span class="text-vermelho">*</span></label>
                                    <input type="text" name="razao_social" id="razao_social" required
                                        value="{{ $fornecedor->razao_social ?? old('razao_social') }}" class="form-campo">
                                    @error('razao_social')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-6 mb-3" id="divFantasia">
                                    <label class="text-label">Nome Fantasia</label>
                                    <input type="text" name="nome_fantasia" id="nome_fantasia"
                                        value="{{ $fornecedor->nome_fantasia ?? old('nome_fantasia') }} " id="nome_fantasia"
                                        class="form-campo">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label id="lblCnpj">CNPJ<span class="text-vermelho">*</span></label>
                                    <input type="text" name="cnpj" id="cnpj"
                                        value="{{ $fornecedor->cnpj ?? old('cnpj') }}" class="form-campo">
                                </div>

                                <div class="col-3" id="div_tipo_contribuinte">
                                    <label class="text-label">Tipo de Contribuinte </label>
                                    <select class="form-campo" name="tipo_contribuinte" id="tipo_contribuinte">
                                        <option value="1"
                                            {{ ($fornecedor->tipo_contribuinte ?? null) == 1 ? 'selected' : '' }}>1 -
                                            Contribuinte ICMS</option>
                                        <option value="9"
                                            {{ ($fornecedor->tipo_contribuinte ?? null) == 9 ? 'selected' : '' }}>9 -
                                            Não Contribuinte</option>
                                        <option value="2"
                                            {{ ($fornecedor->tipo_contribuinte ?? null) == 2 ? 'selected' : '' }}>2 -
                                            Contribuinte Isento</option>
                                    </select>
                                </div>


                                <div class="col-2 mb-3">
                                    <label class="text-label" id="lblInscEstadual">Inscrição Estadual</label>
                                    <input type="text" name="rg_ie" maxlength="14" id="rg_ie"
                                        value="{{ $fornecedor->rg_ie ?? old('rg_ie') }}" class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Celular:</label>
                                    <input type="text" name="celular"
                                        value="{{ $fornecedor->celular ?? old('celular') }}"
                                        class="form-campo mascara-celular">
                                </div>

                                <div class="col-8 mb-3">
                                    <label class="text-label">Email</label>
                                    <input type="text" name="email" value="{{ $fornecedor->email ?? old('email') }}"
                                        class="form-campo">
                                </div>



                            </div>
                        </div>
                    </div>

                    <div id="tab-2">
                        <div class="p-2">
                            <span class="d-block mt-4 mb-4 border-bottom text-uppercase pb-1">Endereço</span>
                            <div class="rows">
                                <div class="col-2 mb-3">
                                    <label class="text-label">CEP</label>
                                    <div class="input-grupo">
                                        <input type="text" value="{{ $fornecedor->cep ?? old('cep') }}" name="cep"
                                            id="cep" class="form-campo busca_cep mascara-cep">

                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Logradouro</label>
                                    <input type="text" name="logradouro" id="logradouro"
                                        value="{{ $fornecedor->logradouro ?? old('logradouro') }}" class="form-campo rua">
                                    @error('logradouro')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="col-2 mb-4">
                                    <label class="text-label">Numero</label>
                                    <input type="text" name="numero" id="numero"
                                        value="{{ old('numero', $fornecedor->numero ?? '') }}" class="form-campo ">
                                    @error('numero')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-label">UF</label>
                                    <input type="text" name="uf" id="uf"
                                        value="{{ $fornecedor->uf ?? old('uf') }}" class="form-campo estado">
                                    @error('uf')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Complemento</label>
                                    <input type="text" name="complemento" id="complemento"
                                        value="{{ $fornecedor->complemento ?? old('complemento') }}" class="form-campo">
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Bairro</label>
                                    <input type="text" name="bairro" id="bairro"
                                        value="{{ $fornecedor->bairro ?? old('bairro') }}" class="form-campo bairro">
                                    @error('bairro')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-4 mb-2">
                                    <label class="text-label">Cidade</label>
                                    <input type="text" name="cidade" id="cidade"
                                        value="{{ $fornecedor->cidade ?? old('cidade') }}" class="form-campo cidade">
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-label">IBGE</label>
                                    <input type="text" name="ibge" id="ibge"
                                        value="{{ $fornecedor->ibge ?? old('ibge') }}" class="form-campo ibge">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 text-center pb-4">
                        <input type="submit" value="Salvar" class="btn btn-padrao m-auto">
                    </div>
                </form>
            </div>
        </div>

        {{-- 
    </div>
    {{-- <script>
        function tipoFornecedor() {
            var tp = $("#tipo_fornecedor").val();

            if (tp == "F") {
                $("#div_pesquisar").hide();
                $("#divIscEstadual").hide();
                $("#divSuframa").hide();
                $("#divFantasia").hide();

                $("#lblInscEstadual").html("RG");
                $("#lblCnpj").html('CPF');
                $("#lblRazaoSocial").html('Nome');
                $("#cnpj").mask('000.000.000-00', {
                    reverse: true
                });
                $("#indFinal option:contains(Sim)").attr('selected', true);
                $("#tipo_contribuinte option:contains(Não)").attr('selected', true);
            } else {
                $("#div_pesquisar").show();
                $("#divIscEstadual").show();
                $("#divSuframa").show();
                $("#divFantasia").show();

                $("#lblInscEstadual").html("Inscrição Estadual");
                $("#lblCnpj").html('CNPJ');
                $("#lblRazaoSocial").html('Razão Social');
                $("#cnpj").mask('00.000.000/0000-00', {
                    reverse: true
                });

                $("#lblCnpj").html('CNPJ');
                $("#indFinal option:contains(Não)").attr('selected', true);
                $("#tipo_contribuinte option:contains(ICMS)").attr('selected', true);

            }
        }
    </script> --}}
        {{-- </div> --}}
    @endsection
