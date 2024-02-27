<?php require_once("menu.php"); ?>

<div class="container">
    <div class="row mt-5">
        <h2 class="text-center mt-5">Cadastrar Alarmes</h2>
        <h2 class="text-center"><i class="bi bi-bell-fill icon icon-bell"></i></h2>
        <form action="#" method="POST" name="frmCadClients" class="g-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="nomeAlarme" class="form-lable">Tipo do Alarme</label>
                    <input type="text" id="nomeAlarme" class="form-control" name="namealarme">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="desc" class="form-label">Descrição</label>
                    <input type="text" id="desc" class="form-control" name="descriAlarme">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                <label for="gravidade">Gravidade</label>
                    <select id="gravidade" class="form-select" name="gravidade">
                        <option value="baixa">Baixa</option>
                        <option value="media">Média</option>
                        <option value="alta">Alta</option>
                    </select>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3 col-md-6" name="btnCadTecnico">Cadastrar Alermes</button>
            </div>
        </form>
    </div>
</div>