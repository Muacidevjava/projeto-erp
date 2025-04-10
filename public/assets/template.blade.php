
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto Zeus - mjailton</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale =1">
    <!--css-->
    <link rel="stylesheet" href="{{asset('assets/componentes/css/style_Componente.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/datatables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/datatables/css/responsive.dataTables.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/auxiliar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/grade.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home-venda.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-m.css')}}">
    <!--font icones-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        var base_url = "";
        var _token = "3AfLh22amKzyrhUmot26qBdF4S2eM5Te5QKtPm45";
    </script>
</head>

<body>
<!--- cabecalho -->
    <div class="topo d-flex text-end">

    <a href="" class="mobmenu alt"><i class="fas fa-bars"></i></a>
    <ul class="menu-topo">
        <li class="sub">
                            <img src="img/foto.png" class="img-user">
                        <span class="text-branco"></span>
            <ul>
                <li><a href="#" class=""><i class="fas fa-lock"></i> Usuário</a> </li>

                <li><a href="">Sair</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--- fim cabecalho -->
    <div class="menu-lateral">
    <a href="" class="logo d-block" style="background:none">
        <img src="img/logomin-zeus.svg">
    </a>
    <div class="logo-text">Projeto Zeus</div>
    <nav class="menuprincipal" id="principal">
        <ul class="menu-ul icones">
            <li><a href="">
                    <svg class="icon" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.25 11L10.204 2.04499C10.644 1.60599 11.356 1.60599 11.795 2.04499L20.75 11M3.5 8.74999V18.875C3.5 19.496 4.004 20 4.625 20H8.75V15.125C8.75 14.504 9.254 14 9.875 14H12.125C12.746 14 13.25 14.504 13.25 15.125V20H17.375C17.996 20 18.5 19.496 18.5 18.875V8.74999M7.25 20H15.5"
                            stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Home</span>
                </a>
            </li>
            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                            stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Cadastro</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Tabelas Auxiliares</a>
                        <ul>
                            <li><a href="categoria">Categoria</a></li>
                            <li><a href="unidade">Unidade</a></li>
                            <li><a href="banco">Banco</a></li>
                            <li><a href="tipocontacorrente">Tipo Conta Corrente</a></li>
                            <li><a href="status">Status</a></li>
                            <li><a href="formapagto">Forma Pagto</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Produto</a>
                        <ul>
                            <li><a href="produto">Lista de produto</a></li>
                            <li><a href="produto/create">Cadastro de produto</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Cliente</a>
                        <ul>
                            <li><a href="cliente">Lista de Cliente</a></li>
                            <li><a href="cliente/create">Cadastro de Cliente</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Fornecedor</a>
                        <ul>
                            <li><a href="fornecedor">Lista de Fornecedor</a></li>
                            <li><a href="fornecedor/create">Cadastro de Fornecedor</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Transportadora</a>
                        <ul>
                            <li><a href="transportadora">Lista de Tranpostadora</a></li>
                            <li><a href="transportadora/create">Cadastro de Transportadora</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Vendedor</a>
                        <ul>
                            <li><a href="vendedor">Lista</a></li>
                            <li><a href="vendedor/create">Cadastro de Vendedor</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Conta Corrente</a>
                        <ul>
                            <li><a href="contacorrente">Lista de Conta Corrente</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Imagens</a>
                        <ul>
                            <li><a href="imagem">Lista de Imagens</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Grade Produto</a>
                        <ul>
                            <li><a href="variacaograde">Lista de Variação</a></li>
                            <li><a href="itemvariacaograde">Item da Variação</a></li>
                        </ul>
                    </li>


                    <li class="subcat">
                        <a href="">Cupom Desconto</a>
                        <ul>
                            <li><a href="cupomdesconto">Lista de Cupom Desconto</a></li>
                        </ul>
                    </li>

                </ul>
            </li>






            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 98 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 19.64V15.25C19 12.2663 20.1853 9.40483 22.295 7.29505C24.4048 5.18527 27.2663 4 30.25 4H67.75C70.7337 4 73.5952 5.18527 75.705 7.29505C77.8147 9.40483 79 12.2663 79 15.25V19.64M19 19.64C20.175 19.225 21.435 19 22.75 19H75.25C76.565 19 77.825 19.225 79 19.64M19 19.64C16.8061 20.4157 14.9066 21.8526 13.5634 23.7528C12.2202 25.653 11.4993 27.923 11.5 30.25V34.64M79 19.64C81.1939 20.4157 83.0933 21.8526 84.4366 23.7528C85.7798 25.653 86.5007 27.923 86.5 30.25V34.64M11.5 34.64C12.675 34.225 13.935 34 15.25 34H82.75C84.0273 33.9985 85.2955 34.215 86.5 34.64M11.5 34.64C7.13 36.185 4 40.35 4 45.25V75.25C4 78.2337 5.18526 81.0952 7.29505 83.205C9.40483 85.3147 12.2663 86.5 15.25 86.5H82.75C85.7337 86.5 88.5952 85.3147 90.705 83.205C92.8147 81.0952 94 78.2337 94 75.25V45.25C94.0007 42.923 93.2798 40.653 91.9366 38.7528C90.5933 36.8526 88.6939 35.4157 86.5 34.64"
                            stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>Estoque</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Entradas</a>
                        <ul>
                            <li><a href="entrada">Entradas avulsa</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Saídas</a>
                        <ul>
                            <li><a href="saida">Saídas Avulsas</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Movimentações</a>
                        <ul>
                            <li><a href="lst-historico-movimento.html">Histórico de movimento</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

                            <li class="submenu">
    <a href="#">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
</svg>

        <span>NFE</span>
    </a>
    <ul>
        <li class="subcat">
            <a href="">Emitente</a>
            <ul>
                <li><a href="emitente">Lista de Emitente</a></li>
                <li><a href="emitente/create">Cadastro de Emitente</a></li>
            </ul>
        </li>

        <li class="subcat">
            <a href="">Natureza da Operação</a>
            <ul>
                <li><a href="naturezaoperacao">Lista de Natureza Operação</a></li>
                <li><a href="naturezaoperacao/create">Cadastro de Natureza de Operação</a></li>
            </ul>
        </li>

        <li class="subcat">
            <a href="">Certificado Digital</a>
            <ul>
                <li><a href="certificadodigital">Lista de Certificado Digital</a></li>
                <li><a href="certificadodigital/create">Cadastro de Certificado Digital</a></li>
            </ul>
        </li>
        <li class="subcat">
            <a href="">Notas Fiscais</a>
            <ul>
                <li><a href="notafiscal">Lista de Notas Fiscais</a></li>
                <li><a href="notafiscal/create">Cadastro de Nota Fiscal</a></li>
            </ul>
        </li>


    </ul>
</li>




                            <li class="submenu">
    <a href="#">
        <svg class="icon" viewBox="0 0 98 110" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M4 22.0446H10.4325C12.7995 22.0446 14.8648 23.6364 15.4774 25.9199L17.2549 32.5891M17.2549 32.5891L28.3657 74.2568M17.2549 32.5891C23.2836 32.4201 23.7246 32.5891 30.6863 32.5891H17.2549ZM17.2549 32.5891L23.0777 54.4259L28.3657 74.2568M28.3657 74.2568C24.673 74.2568 21.1316 75.7239 18.5205 78.3349C15.9094 80.946 14.4425 84.4876 14.4425 88.1801H87.5396M28.3657 74.2568H80.4295M28.3657 74.2568C35.3129 74.9785 73.5523 74.1241 80.4295 74.2568M80.4295 74.2568C85.6321 63.5823 90.1757 52.5179 94 41.1287C93.7243 41.945 81.7382 73.0965 80.4295 74.2568ZM48.0903 29.526L62.0136 41.1287M62.0136 41.1287L75.9369 29.526M62.0136 41.1287V9.80136V4M21.4041 102.103C21.4041 103.026 21.0373 103.912 20.3846 104.565C19.7318 105.218 18.8464 105.584 17.9233 105.584C17.0001 105.584 16.1147 105.218 15.462 104.565C14.8092 103.912 14.4425 103.026 14.4425 102.103C14.4425 101.18 14.8092 100.295 15.462 99.6422C16.1147 98.9892 17.0001 98.6225 17.9233 98.6225C18.8464 98.6225 19.7318 98.9892 20.3846 99.6422C21.0373 100.295 21.4041 101.18 21.4041 102.103ZM80.578 102.103C80.578 103.026 80.2113 103.912 79.5583 104.565C78.9058 105.218 78.0203 105.584 77.0972 105.584C76.174 105.584 75.2885 105.218 74.636 104.565C73.983 103.912 73.6163 103.026 73.6163 102.103C73.6163 101.18 73.983 100.295 74.636 99.6422C75.2885 98.9892 76.174 98.6225 77.0972 98.6225C78.0203 98.6225 78.9058 98.9892 79.5583 99.6422C80.2113 100.295 80.578 101.18 80.578 102.103Z"
                stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <span>Vendas</span>
    </a>
    <ul>
        <li class="subcat">
            <a href="">Venda</a>
            <ul>
                <li><a href="venda">Lista de Vendas</a></li>
                <li><a href="venda/create">Cadastro de Venda</a></li>
            </ul>
        </li>


    </ul>
</li>

                            <li class="submenu">
    <a href="#">
        <svg class="icon" viewBox="0 0 98 107" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M68.0147 45.8274V23.0124C68.0147 17.97 66.0116 13.1341 62.4461 9.56862C58.8805 6.00309 54.0446 4 49.0022 4C43.9598 4 39.1239 6.00309 35.5584 9.56862C31.9929 13.1341 29.9898 17.97 29.9898 23.0124V45.8274M87.5645 35.7229L93.9679 96.5627C94.3228 99.9343 91.6864 102.865 88.2946 102.865H9.70985C8.90984 102.866 8.1186 102.698 7.38753 102.373C6.65646 102.048 6.0019 101.573 5.46639 100.979C4.93087 100.385 4.52636 99.6844 4.27915 98.9235C4.03194 98.1627 3.94755 97.3583 4.03146 96.5627L10.4399 35.7229C10.5877 34.3213 11.2492 33.0242 12.2968 32.0814C13.3444 31.1387 14.7039 30.6172 16.1132 30.6174H81.8912C84.8115 30.6174 87.2603 32.8229 87.5645 35.7229ZM31.891 45.8274C31.891 46.3316 31.6907 46.8152 31.3342 47.1718C30.9776 47.5283 30.494 47.7286 29.9898 47.7286C29.4855 47.7286 29.002 47.5283 28.6454 47.1718C28.2889 46.8152 28.0885 46.3316 28.0885 45.8274C28.0885 45.3231 28.2889 44.8395 28.6454 44.483C29.002 44.1264 29.4855 43.9261 29.9898 43.9261C30.494 43.9261 30.9776 44.1264 31.3342 44.483C31.6907 44.8395 31.891 45.3231 31.891 45.8274ZM69.9159 45.8274C69.9159 46.3316 69.7156 46.8152 69.3591 47.1718C69.0025 47.5283 68.5189 47.7286 68.0147 47.7286C67.5104 47.7286 67.0268 47.5283 66.6703 47.1718C66.3137 46.8152 66.1134 46.3316 66.1134 45.8274C66.1134 45.3231 66.3137 44.8395 66.6703 44.483C67.0268 44.1264 67.5104 43.9261 68.0147 43.9261C68.5189 43.9261 69.0025 44.1264 69.3591 44.483C69.7156 44.8395 69.9159 45.3231 69.9159 45.8274Z"
                stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <span>Compras</span>
    </a>
    <ul>
        <li class="subcat">
            <a href="">Compra Manual</a>
            <ul>
                <li><a href="compra">Lista de Compras</a></li>
                <li><a href="compra/create">Nova Compra</a></li>
            </ul>
        </li>
        <li class="subcat">
            <a href="">Importação de XML</a>
            <ul>
                <li><a href="compra">Lista de Compras</a></li>
                <li><a href="compra/create">Nova Compra</a></li>
            </ul>
        </li>

        <li class="subcat">
            <a href="">Manifesto</a>
            <ul>
                <li><a href="compra">Lista de Compras</a></li>
                <li><a href="compra/create">Nova Compra</a></li>
            </ul>
        </li>

        <li class="subcat">
            <a href="">Ordem de Compra</a>
            <ul>
                <li><a href="solicitacao">Solicitacao</a></li>
                <li><a href="cotacao">Cotação</a></li>
                <li><a href="ordemcompra">Ordem de Compra</a></li>
            </ul>
        </li>

    </ul>
</li>

                            <li class="submenu">
    <a href="#">
        <svg class="icon" viewBox="0 0 98 107" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M68.0147 45.8274V23.0124C68.0147 17.97 66.0116 13.1341 62.4461 9.56862C58.8805 6.00309 54.0446 4 49.0022 4C43.9598 4 39.1239 6.00309 35.5584 9.56862C31.9929 13.1341 29.9898 17.97 29.9898 23.0124V45.8274M87.5645 35.7229L93.9679 96.5627C94.3228 99.9343 91.6864 102.865 88.2946 102.865H9.70985C8.90984 102.866 8.1186 102.698 7.38753 102.373C6.65646 102.048 6.0019 101.573 5.46639 100.979C4.93087 100.385 4.52636 99.6844 4.27915 98.9235C4.03194 98.1627 3.94755 97.3583 4.03146 96.5627L10.4399 35.7229C10.5877 34.3213 11.2492 33.0242 12.2968 32.0814C13.3444 31.1387 14.7039 30.6172 16.1132 30.6174H81.8912C84.8115 30.6174 87.2603 32.8229 87.5645 35.7229ZM31.891 45.8274C31.891 46.3316 31.6907 46.8152 31.3342 47.1718C30.9776 47.5283 30.494 47.7286 29.9898 47.7286C29.4855 47.7286 29.002 47.5283 28.6454 47.1718C28.2889 46.8152 28.0885 46.3316 28.0885 45.8274C28.0885 45.3231 28.2889 44.8395 28.6454 44.483C29.002 44.1264 29.4855 43.9261 29.9898 43.9261C30.494 43.9261 30.9776 44.1264 31.3342 44.483C31.6907 44.8395 31.891 45.3231 31.891 45.8274ZM69.9159 45.8274C69.9159 46.3316 69.7156 46.8152 69.3591 47.1718C69.0025 47.5283 68.5189 47.7286 68.0147 47.7286C67.5104 47.7286 67.0268 47.5283 66.6703 47.1718C66.3137 46.8152 66.1134 46.3316 66.1134 45.8274C66.1134 45.3231 66.3137 44.8395 66.6703 44.483C67.0268 44.1264 67.5104 43.9261 68.0147 43.9261C68.5189 43.9261 69.0025 44.1264 69.3591 44.483C69.7156 44.8395 69.9159 45.3231 69.9159 45.8274Z"
                stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <span>Produção</span>
    </a>
    <ul>

        <li><a href="processoprodutivo">Processo Produtivo</a></li>
        <li><a href="etapaproducao">Etapa de Produção</a></li>
        <li><a href="produtocomposicao">Engenharia do Produto</a></li>
        <li><a href="ordemproducao">Ordem de Produção</a></li>

    </ul>
</li>

                            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                            stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Financeiro</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Plano de Conta</a>
                        <ul>
                            <li><a href="planoconta">Plano de Conta</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Centro de Custo</a>
                        <ul>
                            <li><a href="centrocusto">Centro de Custo</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Despesas Fixas</a>
                        <ul>
                            <li><a href="despesafixa">Despesas Fixas</a></li>
                        </ul>
                    </li>


                    <li class="subcat">
                        <a href="">Contas a Receber</a>
                        <ul>
                            <li><a href="contareceber">Contas a Receber</a></li>
                            <li><a href="recebimento">Recebimento</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Contas a Pagar</a>
                        <ul>
                            <li><a href="contapagar">Contas a Pagar</a></li>
                            <li><a href="pagamento">Pagamentos</a></li>
                        </ul>
                    </li>

                </ul>
            </li>


                    </ul>
    </nav>

</div>
    <script>
        $("#msg_lista_um_erro");
    </script>
    <script>
        $("#msg_lista_varios_erros");
    </script>
        <div id="mostrarErros"></div>
    <div id="mostrarUmErro"></div>
    <div id="mostrarSucesso"></div>

    <div class="conteudo">
            <div class="home Venda">
        <div class="rows">
            <div class="col-12 mb-4 d-flex justify-between">
                <h1>Dashboard - ERP Mjailton</h1>
            </div>
            <div class="col-12">
                <div class="rows contas">
                    <div class="col-6 mb-4 d-flex">
                        <div class="caixa-home conta-receber hoje w-100">
                            <svg width="50" viewBox="0 0 75 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M48.4251 60.2399C51.5307 61.1343 54.7486 61.5866 57.9824 61.5833C63.1831 61.5907 68.3162 60.4146 72.9866 58.1455C73.1246 54.9089 72.1951 51.7158 70.3388 49.0503C68.4826 46.3848 65.8008 44.3921 62.7 43.3743C59.5991 42.3565 56.2482 42.369 53.1552 43.41C50.0622 44.451 47.3956 46.4637 45.5597 49.143M48.4251 60.2399V60.2291C48.4251 56.2099 47.3838 52.4291 45.5597 49.143M48.4251 60.2399V60.6227C41.4181 64.8083 33.3904 67.0136 25.2107 66.9999C16.7238 66.9999 8.78299 64.6708 2.00364 60.6227L2 60.2291C1.99721 55.1175 3.70982 50.1503 6.86782 46.1106C10.0258 42.071 14.4496 39.1887 19.4417 37.9182C24.4338 36.6477 29.7102 37.0613 34.4392 39.0936C39.1681 41.126 43.0806 44.6616 45.5597 49.143M37.5024 14.1875C37.5024 17.4198 36.2078 20.5197 33.9033 22.8053C31.5989 25.0909 28.4733 26.375 25.2144 26.375C21.9554 26.375 18.8299 25.0909 16.5254 22.8053C14.221 20.5197 12.9263 17.4198 12.9263 14.1875C12.9263 10.9552 14.221 7.85523 16.5254 5.56963C18.8299 3.28404 21.9554 2 25.2144 2C28.4733 2 31.5989 3.28404 33.9033 5.56963C36.2078 7.85523 37.5024 10.9552 37.5024 14.1875ZM67.5398 22.3125C67.5398 24.8265 66.5329 27.2376 64.7405 29.0153C62.9482 30.7929 60.5172 31.7916 57.9824 31.7916C55.4477 31.7916 53.0167 30.7929 51.2244 29.0153C49.432 27.2376 48.4251 24.8265 48.4251 22.3125C48.4251 19.7985 49.432 17.3874 51.2244 15.6097C53.0167 13.832 55.4477 12.8333 57.9824 12.8333C60.5172 12.8333 62.9482 13.832 64.7405 15.6097C66.5329 17.3874 67.5398 19.7985 67.5398 22.3125Z"
                                    stroke="white" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <div>
                                <small><b>Clientes </b></small>
                                <h1>100</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4 d-flex">
                        <div class="caixa-home conta-receber hoje w-100">
                            <svg width="50" viewBox="0 0 64 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M45.1395 30.1875V14.8125C45.1395 11.4144 43.7896 8.1555 41.3868 5.75269C38.984 3.34988 35.7251 2 32.327 2C28.9289 2 25.67 3.34988 23.2672 5.75269C20.8644 8.1555 19.5145 11.4144 19.5145 14.8125V30.1875M58.3142 23.3781L62.6294 64.3781C62.8686 66.6502 61.0919 68.625 58.8062 68.625H5.84787C5.30875 68.6256 4.77553 68.5127 4.28286 68.2938C3.79019 68.0749 3.34908 67.7548 2.9882 67.3542C2.62731 66.9537 2.35472 66.4818 2.18812 65.969C2.02153 65.4563 1.96465 64.9142 2.0212 64.3781L6.33987 23.3781C6.43949 22.4336 6.88526 21.5594 7.59123 20.9241C8.2972 20.2888 9.21338 19.9373 10.1631 19.9375H54.4909C56.4589 19.9375 58.1092 21.4238 58.3142 23.3781ZM20.7958 30.1875C20.7958 30.5273 20.6608 30.8532 20.4205 31.0935C20.1802 31.3338 19.8543 31.4688 19.5145 31.4688C19.1747 31.4688 18.8488 31.3338 18.6086 31.0935C18.3683 30.8532 18.2333 30.5273 18.2333 30.1875C18.2333 29.8477 18.3683 29.5218 18.6086 29.2815C18.8488 29.0412 19.1747 28.9063 19.5145 28.9063C19.8543 28.9063 20.1802 29.0412 20.4205 29.2815C20.6608 29.5218 20.7958 29.8477 20.7958 30.1875ZM46.4208 30.1875C46.4208 30.5273 46.2858 30.8532 46.0455 31.0935C45.8052 31.3338 45.4793 31.4688 45.1395 31.4688C44.7997 31.4688 44.4738 31.3338 44.2336 31.0935C43.9933 30.8532 43.8583 30.5273 43.8583 30.1875C43.8583 29.8477 43.9933 29.5218 44.2336 29.2815C44.4738 29.0412 44.7997 28.9063 45.1395 28.9063C45.4793 28.9063 45.8052 29.0412 46.0455 29.2815C46.2858 29.5218 46.4208 29.8477 46.4208 30.1875Z"
                                    stroke="white" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <div>
                                <small><b>Qtde de Vendas do Mês</b></small>
                                <h1>1000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 d-flex">
                        <div class="caixa-home conta-receber hoje w-100">
                            <svg width="50" viewBox="0 0 66 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M45.1395 30.1875V14.8125C45.1395 11.4144 43.7897 8.1555 41.3868 5.75269C38.984 3.34988 35.7251 2 32.327 2C28.9289 2 25.67 3.34988 23.2672 5.75269C20.8644 8.1555 19.5145 11.4144 19.5145 14.8125V30.1875M59.5 38L58.3142 23.3781C58.1092 21.4238 56.4589 19.9375 54.4909 19.9375H10.1631C9.21338 19.9373 8.2972 20.2888 7.59123 20.9241C6.88525 21.5594 6.43949 22.4336 6.33987 23.3781L2.0212 64.3781C1.96465 64.9142 2.02153 65.4563 2.18812 65.969C2.35472 66.4818 2.62731 66.9537 2.9882 67.3542C3.34908 67.7548 3.79019 68.0749 4.28286 68.2938C4.77553 68.5127 5.30875 68.6256 5.84787 68.625H25.5M20.7958 30.1875C20.7958 30.5273 20.6608 30.8532 20.4205 31.0935C20.1802 31.3338 19.8543 31.4688 19.5145 31.4688C19.1747 31.4688 18.8488 31.3338 18.6086 31.0935C18.3683 30.8532 18.2333 30.5273 18.2333 30.1875C18.2333 29.8477 18.3683 29.5218 18.6086 29.2815C18.8488 29.0412 19.1747 28.9062 19.5145 28.9062C19.8543 28.9062 20.1802 29.0412 20.4205 29.2815C20.6608 29.5218 20.7958 29.8477 20.7958 30.1875ZM46.4208 30.1875C46.4208 30.5273 46.2858 30.8532 46.0455 31.0935C45.8052 31.3338 45.4793 31.4688 45.1395 31.4688C44.7997 31.4688 44.4738 31.3338 44.2336 31.0935C43.9933 30.8532 43.8583 30.5273 43.8583 30.1875C43.8583 29.8477 43.9933 29.5218 44.2336 29.2815C44.4738 29.0412 44.7997 28.9062 45.1395 28.9062C45.4793 28.9062 45.8052 29.0412 46.0455 29.2815C46.2858 29.5218 46.4208 29.8477 46.4208 30.1875Z"
                                    stroke="white" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M46.5 44.8333V68.1667M40.6667 62.6872L42.3758 63.9686C44.6528 65.6778 48.3453 65.6778 50.6242 63.9686C52.9031 62.2594 52.9031 59.4906 50.6242 57.7814C49.4867 56.9258 47.9933 56.5 46.5 56.5C45.0903 56.5 43.6806 56.0722 42.6053 55.2186C40.4547 53.5094 40.4547 50.7406 42.6053 49.0314C44.7558 47.3222 48.2442 47.3222 50.3947 49.0314L51.2017 49.6731M64 56.5C64 58.7981 63.5474 61.0738 62.6679 63.197C61.7884 65.3202 60.4994 67.2493 58.8744 68.8744C57.2493 70.4994 55.3202 71.7884 53.197 72.6679C51.0738 73.5474 48.7981 74 46.5 74C44.2019 74 41.9262 73.5474 39.803 72.6679C37.6798 71.7884 35.7507 70.4994 34.1256 68.8744C32.5006 67.2493 31.2116 65.3202 30.3321 63.197C29.4527 61.0738 29 58.7981 29 56.5C29 51.8587 30.8437 47.4075 34.1256 44.1256C37.4075 40.8437 41.8587 39 46.5 39C51.1413 39 55.5925 40.8437 58.8744 44.1256C62.1563 47.4075 64 51.8587 64 56.5Z"
                                    stroke="white" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div>
                                <small><b>Total de Vendas do mês</b></small>
                                <h1>R$ 100</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 d-flex">
                        <div class="caixa-home conta-receber hoje w-100">
                            <svg width="50" viewBox="0 0 35 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 5.84999L24.299 2.54925C24.6507 2.19757 25.1277 2 25.625 2C26.1223 2 26.5993 2.19757 26.951 2.54925C27.3027 2.90092 27.5002 3.3779 27.5002 3.87525C27.5002 4.37259 27.3027 4.84957 26.951 5.20125L12.582 19.5702C12.0533 20.0986 11.4014 20.487 10.685 20.7002L8 21.5002L8.8 18.8152C9.01328 18.0989 9.40163 17.4469 9.93 16.9182L22.613 4.23725L21 5.84999ZM21 5.84999L22.613 7.5"
                                    stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                <rect y="25" width="35" height="3" rx="1.5" fill="white" />
                            </svg>
                            <div>
                                <small><b>Orçamentos abertos</b></small>
                                <h1>10</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 d-flex">
                        <div class="caixa-home conta-receber hoje w-100">
                            <svg width="70" viewBox="0 0 41 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.79 21.6667L26.5 25L32 17M33 23C33 23.7879 32.8448 24.5681 32.5433 25.2961C32.2417 26.0241 31.7998 26.6855 31.2426 27.2426C30.6855 27.7998 30.0241 28.2417 29.2961 28.5433C28.5681 28.8448 27.7879 29 27 29C26.2121 29 25.4319 28.8448 24.7039 28.5433C23.9759 28.2417 23.3145 27.7998 22.7574 27.2426C22.2002 26.6855 21.7583 26.0241 21.4567 25.2961C21.1552 24.5681 21 23.7879 21 23C21 21.4087 21.6321 19.8826 22.7574 18.7574C23.8826 17.6321 25.4087 17 27 17C28.5913 17 30.1174 17.6321 31.2426 18.7574C32.3679 19.8826 33 21.4087 33 23Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M21 5.84999L24.299 2.54925C24.6507 2.19757 25.1277 2 25.625 2C26.1223 2 26.5993 2.19757 26.951 2.54925C27.3027 2.90092 27.5002 3.3779 27.5002 3.87525C27.5002 4.37259 27.3027 4.84957 26.951 5.20125L12.582 19.5702C12.0533 20.0986 11.4014 20.487 10.685 20.7002L8 21.5002L8.8 18.8152C9.01328 18.0989 9.40163 17.4469 9.93 16.9182L22.613 4.23725L21 5.84999ZM21 5.84999L22.613 7.5"
                                    stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                <rect y="25" width="17" height="3" rx="1.5" fill="white" />
                                <rect x="36" y="25" width="5" height="3" rx="1.5" fill="white" />
                            </svg>

                            <div>
                                <small><b>Orçamentos Concretizados</b></small>
                                <h1>10</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 mt-4">

                <div class="rows contas">
                    <div class="col-6 mb-4">
                        <div class="tabela-responsiva">
                            <span class="h5 text-uppercase center-middle d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                Últimas Vendas</span>
                            <div class="p-0 d-block home tscroll2">
                                <table class="table" cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th align="left">Vendas</th>
                                            <th>Data</th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Vendas</td>
                                            <td class="text-center">29/07/2023</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Vendas</td>
                                            <td class="text-center">29/07/2023</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Vendas</td>
                                            <td class="text-center">29/07/2023</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>compra</td>
                                            <td class="text-center">29/07/2023</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="tabela-responsiva">
                            <span class="h5 text-uppercase center-middle d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>

                                Clientes com Débitos </span>
                            <div class="p-0 d-block home tscroll2">
                                <table class="table" cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th align="left">Cliente</th>
                                            <th class="text-center">Débito</th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cliente</td>
                                            <td class="text-center">R$100,00</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cliente </td>
                                            <td class="text-center">R$100,00</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cliente </td>
                                            <td class="text-center">R$100,00</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cliente </td>
                                            <td class="text-center">R$100,00</td>
                                            <td class="text-center"><a href="" class="fas fa-eye text-verde"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="js/datatables/js/dataTables.responsive.min.js"></script>
    <script src="js/datatables/js/jquery.dataTables.min.js"></script>

    <script src="js/jquery.mask.js"></script>

    <script src="componentes/js/js_data_table.js"></script>
    <script src="componentes/js/js_modal.js"></script>
    <script src="componentes/js/js_util.js"></script>
    <script src="componentes/js/js_mascara.js"></script>
    <script src="componentes/js/upload.js"></script>

    <script>
        $(function() {
            $("#tab").tabs();
        });
    </script>

</body>

</html>
