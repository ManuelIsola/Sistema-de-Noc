<?php require_once("menu.php"); ?>

<div class="container">
    <div class="row mt-5">
        <h2 class="text-center mt-5">Cadastrar Usuários</h2>
        <h2 class="text-center"><i class="bi bi-person-badge"></i></h2>
        <form action="#" method="POST" name="frmCadForm" class="g-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="nomeUser" class="form-lable">Nome Completo do Técnico</label>
                    <input type="text" id="nomeUser" class="form-control" name="nameUser">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="bi" class="form-label">Número do Bilhete de Identidade do Técnico</label>
                    <input type="text" id="bi" class="form-control" name="userBi">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="Email" class="label-form">Email do Técnico</label>
                    <input type="email" id="email" class="form-control" name="emailUser">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3 col-md-6" name="btnCadTecnico">Cadastrar Técnico</button>
            </div>
        </form>
    </div>
</div>