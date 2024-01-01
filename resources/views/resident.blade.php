@extends('main_condominio')

@section('content')
    <div class="mt-3">
        <div class="d-flex justify-content-center">
            <input id="product" class="search-bar form-control me-2" type="text" placeholder="Procurar morador"
                aria-label="Search">
            <a href="#" class="btn btn-success" id="search-link">
                <img src="{{ asset('/icon/search.svg') }}" alt="" width="30">
            </a>
        </div>
        <div id="suggestions">

        </div>
    </div>
    <h4 class="mt-3 title-font">Cadastrar Morador</h4>
    <div class="condo-separator"></div>
    <div class="condo-font card card-body shadow-card mt-3">
        <div class="d-flex justify-content-center">
            <span class="logotipo">
                <img src="{{ asset('/icon/logo.svg') }}" width="40">

            </span>
        </div>
        <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
        <h6 class="d-flex justify-content-center mb-3"><strong>FICHA DE CADASTRO DE MORADOR</strong></h6>
        <div class="d-flex justify-content-center">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formResidentModal">
                Cadastrar
            </button>
        </div>
    </div>
    <h4 class="mt-3 title-font">Moradores</h4>
    <div class="condo-separator"></div>

    <div class="condo-font card card-body shadow-card mt-3">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>LOTE</th>
                        <th>Nº DA RESIDÊNCIA</th>
                        <th>MORADOR</th>
                    </tr>
                </thead>
                <tbody id="clickableBody">
                    <tr>
                        <td>A</td>
                        <td>250</td>
                        <td>Helpidio Loduvino Caldeira Mateus</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>250</td>
                        <td>Helpidio Loduvino Caldeira Mateus</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="pagination-container" class="mt-3">
        <!-- Botões de paginação serão inseridos aqui -->
    </div>

    <div class="modal" tabindex="-1" id="formResidentModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3">
                        <div class="d-flex justify-content-center">
                            <span class="logotipo">
                                <img src="{{ asset('/icon/logo.svg') }}" width="40">

                            </span>
                        </div>
                        <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
                        <h6 class="d-flex justify-content-center mb-5"><strong>FICHA DE CADASTRO DE MORADOR</strong></h6>
                        <form class="row" action="">
                            <h6 class="mt-5"><strong>DADOS PESSOAIS</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3">
                                <h6>NOME COMPLETO</h6>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>BILHETE DE IDENTIDADE</h6>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>DATA DE NASCIMENTO</h6>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>GÉNERO</h6>
                                <select class="form-control" name="owner_gender">
                                    <option value="">--Escolher--</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMININO">FEMININO</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>NACIONALIDADE</h6>
                                <select class="form-control" name="owner_nacionality">
                                    <option value="">--Escolher--</option>
                                    <option value="MASCULINO">ANGOLA</option>
                                </select>
                            </div>

                            <h6><strong>CONTATOS</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3">
                                <h6>TELEFONE</h6>
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>EMAIL</h6>
                                <input type="email" class="form-control">
                            </div>

                            <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3">
                                <h6>LOTE</h6>
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>Nº DA RESIDÊNCIA</h6>
                                <input type="number" class="form-control">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                        <img src="{{ asset('/icon/edit.svg') }}" alt="" width="30">
                    </button>
                    <button type="button" class="btn btn-primary">
                        <img src="{{ asset('/icon/print.svg') }}" alt="" width="30">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="contractResidentModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3">
                        <div class="d-flex justify-content-center">
                            <span class="logotipo">
                                <img src="{{ asset('/icon/logo.svg') }}" width="40">

                            </span>
                        </div>
                        <h6 class="d-flex justify-content-center"><strong>ConGest</strong></h6>
                        <h6 class="d-flex justify-content-center mb-5"><strong>CONTRATO DE MORADOR</strong></h6>
                        <form class="row" action="">
                            <h6 class="mt-5"><strong>DADOS PESSOAIS</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NOME COMPLETO</h6>
                                <h5><strong>helpidio loduvino caldeira mateus</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>BILHETE DE IDENTIDADE</h6>
                                <h5><strong>78886667767ggh78</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>DATA DE NASCIMENTO</h6>
                                <h5><strong>01/01/2003</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>GÉNERO</h6>
                                <h5><strong>masculino</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NACIONALIDADE</h6>
                                <h5><strong>angolano</strong></h5>
                            </div>

                            <h6><strong>CONTATOS</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3">
                                <h6>TELEFONE</h6>
                                <h5><strong>944459953</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>EMAIL</h6>
                                <h5><strong>helpidio@gmail.com</strong></h5>
                            </div>

                            <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>LOTE</h6>
                                <h5><strong>b</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>Nº DA RESIDÊNCIA</h6>
                                <h5><strong>25</strong></h5>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                        <img src="{{ asset('/icon/edit.svg') }}" alt="" width="30">
                    </button>
                    <button type="button" class="btn btn-primary">
                        <img src="{{ asset('/icon/print.svg') }}" alt="" width="30">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.querySelector('.table');
            const rows = Array.from(table.querySelectorAll('tbody tr'));
            const rowsPerPage = 5; // Defina o número de linhas por página
            const pageCount = Math.ceil(rows.length / rowsPerPage);

            // Função para mostrar as linhas corretas com base na página atual
            function showPage(page) {
                const start = (page - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                rows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? '' : 'none';
                });
            }

            // Cria os botões de paginação
            for (let i = 1; i <= pageCount; i++) {
                const btn = document.createElement('button');
                btn.innerText = i;
                btn.addEventListener('click', function() {
                    showPage(i);
                });
                document.getElementById('pagination-container').appendChild(btn);
            }

            // Mostra a primeira página por padrão
            showPage(1);
        });
    </script>
@endsection
