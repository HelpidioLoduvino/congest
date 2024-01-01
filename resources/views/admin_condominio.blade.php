@extends('main_admin')

@section('content')
    <div class="condo-font card card-body shadow-card mt-3">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome Do Condomínio</th>
                        <th>Tipo de Contrato</th>
                        <th>Data Do Contrato</th>
                        <th>Plano Do Contrato</th>
                    </tr>
                </thead>
                <tbody id="clickableBody">
                    <tr data-type="Empresa">
                        <td>Condominio Dos Cajueiros</td>
                        <td>Empresa</td>
                        <td>10/09/2023</td>
                        <td>Plano Semestral</td>
                    </tr>

                    <tr data-type="Pessoal">
                        <td>Condominio Dos Cajueiros</td>
                        <td>Pessoal</td>
                        <td>10/09/2023</td>
                        <td>Plano Anual</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="contractCompanyModal" aria-hidden="true">
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
                        <h6 class="d-flex justify-content-center mb-5"><strong>CONTRATO DO CONDOMÍNIO</strong></h6>
                        <form class="row" action="">
                            <h6><strong>DADOS DA EMPRESA</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NOME DA EMPRESA</h6>
                                <h5><strong>congest</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NIF</h6>
                                <h5><strong>0076787887</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>LOCALIZAÇÃO</h6>
                                <h5><strong>TALATONA</strong></h5>
                            </div>

                            <h6><strong>CONTATOS</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>TELEFONE</h6>
                                <h5><strong>944459953</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>EMAIL</h6>
                                <h5><strong>helpidiolafame@gmail.com</strong></h5>
                            </div>

                            <h6><strong>DADOS DO CONDOMÍNIO</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NOME DO CONDOMÍNIO</h6>
                                <h5><strong>condominio dos cajueiros</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>TÍTULO DE PROPRIEDADE</h6>
                                <input type="file" class="form-control" accept=".pdf">
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>LOCALIZAÇÃO</h6>
                                <h5><strong>camama</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NIF</h6>
                                <h5><strong>9383839</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>LOTES</h6>
                                <h5><strong>10</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>RESIDÊNCIAS</h6>
                                <h5><strong>120</strong></h5>
                            </div>

                            <h6><strong>DADOS DO CONTRATO</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3">
                                <h6>PLANO DO CONTRATO</h6>
                                <h5><strong>SEMESTRAL</strong></h5>
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

    <div class="modal" tabindex="-1" id="contractPersonModal" aria-hidden="true">
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
                        <h6 class="d-flex justify-content-center mb-5"><strong>CONTRATO DO CONDOMÍNIO</strong></h6>
                        <form class="row" action="">
                            <h6><strong>DADOS PESSOAIS</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NOME COMPLETO</h6>
                                <h5><strong>helpidio loduvino caldeira mateus</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>BILHETE DE IDENTIDADE</h6>
                                <h5><strong>383993953</strong></h5>
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
                                <h5><strong>angolana</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>MORADA</h6>
                                <h5><strong>morro bento</strong></h5>
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
                                <h6>NOME DO CONDOMÍNIO</h6>
                                <h5><strong>condominio vila flor</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>TÍTULO DE PROPRIEDADE</h6>
                                <input type="file" class="form-control" accept=".pdf">
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>LOCALIZAÇÃO</h6>
                                <h5><strong>patriota</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3 uppercase-text">
                                <h6>NIF</h6>
                                <h5><strong>9383839</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>LOTES</h6>
                                <h5><strong>10</strong></h5>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6>RESIDÊNCIAS</h6>
                                <h5><strong>120</strong></h5>
                            </div>

                            <h6><strong>DADOS DO CONTRATO</strong></h6>
                            <div class="form-separator mb-3"></div>

                            <div class="col-md-6 mb-3">
                                <h6>PLANO DO CONTRATO</h6>
                                <h5><strong>ANUAL</strong></h5>
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
    <div id="pagination-container" class="mt-3">
        <!-- Botões de paginação serão inseridos aqui -->
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
