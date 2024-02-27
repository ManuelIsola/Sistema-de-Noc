<?php require_once("menu.php"); ?>
<div class="container">
    <div class="row mt-5">
        <h3 class="mt-5">Lista dos Técnicos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-3">
            <input class="form-control" list="userName" id="exampleDataList" placeholder="Digite o nome do Técnico">
            <datalist id="datalistOptions">
                <option value="ABC DEVS"></option>
            </datalist>
        <thead>
            <tr>
            <th>COD</th>
            <th>NOME</th>
            <th>Nº BILHETE</th>
            <th>EMAIL</th>
            <th>ACÕES</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            <tr>
                <td>1</td>
                <td>ABC Devs</td>
                <td>008933883LA003</td>
                <td>infoabacdevd@gmail.com</td>
                <td>
                    <button class="btn text-info" title="Editar"><i class="bi bi-pencil-square"></i></button>
                    <button class="btn text-danger" title="Eliminar"><i class="bi bi-trash3"></i></button>
                </td>
            </tr>
        </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center" id="pagination">
        <!-- Paginação será adicionada aqui -->
        </ul>
    </nav>
    </div>
    </div>
</div>