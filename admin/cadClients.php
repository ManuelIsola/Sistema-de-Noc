<?php require_once("menu.php"); ?>

<div class="container">
    <div class="row mt-5">
        <h2 class="text-center mt-5">Cadastrar Clientes</h2>
        <h2 class="text-center"><i class="bi bi-building-add"></i></h2>
        <form action="#" method="POST" name="frmCadClients" class="g-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="nomeCliet" class="form-lable">Nome do Cliente</label>
                    <input type="text" id="nomeClient" class="form-control" name="nameClient">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="nif" class="form-label">NIF</label>
                    <input type="text" id="nif" class="form-control" name="nif">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="Email" class="label-form">Email do Client</label>
                    <input type="email" id="email" class="form-control" name="emailclient">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3 col-md-6" name="btnCadTecnico">Cadastrar Cliente</button>
            </div>
        </form>
    </div>
</div>