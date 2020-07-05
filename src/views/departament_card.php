<main class="content">
    <div class="content-title mb-4">
        <div class="header-card ml-2">
            <div>
                <p>Departamentos</p>
            </div>
            <div class="row">
                <div class="mx-2">                    
                    <button class="btn btn-head btn-primary" onclick="location.href='cadastro.php'">
                        <i class="icofont-arrow-left mr-1"></i>
                        Voltar
                    </button>
                </div>
                <div class="mr-3">                    
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#ModalLoginForm">
                        <i class="icofont-ui-add mr-1 mt-1"></i>
                        Adicionar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="content-table">
        <table class="table table-sm table-bordered table-hover table-content">
            <thead class="bg-dark text-white thead-title">
                <th class="col-md-5">Departamento</th>
                <th class="col-md-5">Secretaria</th>
                <th class="td-center col-md-2">Ações</th>
            </thead> 
            <tbody>
                <tr>
                    <td>Coletoria Municipal</td>
                    <td>Administração</td>
                    <td class="td-center">
                        <div class="btn-area">
                            <a href="#" class="ml-2">
                                <i class="text-primary action-button-up icofont-pencil-alt-5"></i>
                            </a>
                            <a href="#" class="ml-2">
                                <i class="text-danger action-button-del icofont-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>   
        </table>
    </div>
</main>