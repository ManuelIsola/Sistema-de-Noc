<?php require_once("menu.php"); ?>

<div class="container">
    <div class="row mt-5">
        <h3 class="mt-5">Lista dos Alarmes</h2>
        <div class="table-responsive">
            <input class="form-control" list="userName" id="exampleDataList" placeholder="Digite o nome do Alarme">
            <datalist id="datalistOptions"></datalist>
            <table class="table table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>TIPO</th>
                        <Th>DESCRIÇÃO</Th>
                        <th>GRAVIDADE</th>
                        <th>ACÕES</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    <tr>
                        <td>1</td>
                        <td>Aquecimento do equipamento</td>
                        <td>Lorem ipsum dolor.</td>
                        <td>Média</td>
                        <td>
                            <button class="btn text-info" title="Editar"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn text-danger" title="Eliminar"><i class="bi bi-trash3"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center" id="pagination"></ul>
        </nav>
    </div>
</div>
