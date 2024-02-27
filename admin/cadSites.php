<?php require_once("menu.php"); ?>

<div class="container">
    <div class="row mt-5">
        <h2 class="text-center mt-5">Cadastrar Sites</h2>
        <h2 class="text-center"><i class="bi bi-wifi"></i></h2>
        <form action="#" method="POST" name="frmCadClients" class="g-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="nomeSite" class="form-lable">Nome do Site</label>
                    <input type="text" id="nomeSite" class="form-control" name="nameSite">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                <label for="provincias">Província</label>
                    <select id="provincias" class="form-control" name="provincias">
                        <option value="Bengo">Seleciona a Província</option>
                        <option value="Bengo">Bengo</option>
                        <option value="Benguela">Benguela</option>
                        <option value="Bié">Bié</option>
                        <option value="Cabinda">Cabinda</option>
                        <option value="Cunene">Cunene</option>
                        <option value="Huambo">Huambo</option>
                        <option value="Huíla">Huíla</option>
                        <option value="Kuando Kubango">Kuando Kubango</option>
                        <option value="Kwanza Norte">Kwanza Norte</option>
                        <option value="Kwanza Sul">Kwanza Sul</option>
                        <option value="Luanda">Luanda</option>
                        <option value="Lunda Norte">Lunda Norte</option>
                        <option value="Lunda Sul">Lunda Sul</option>
                        <option value="Malanje">Malanje</option>
                        <option value="Moxico">Moxico</option>
                        <option value="Namibe">Namibe</option>
                        <option value="Uíge">Uíge</option>
                        <option value="Zaire">Zaire</option>
                    </select>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="city" class="label-form">Cidade</label>
                    <input type="text" id="city" class="form-control" name="cidade">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="respon" class="label-form">Responsável</label>
                    <input type="text" id="respon" class="form-control" name="respSite">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="dist" class="label-form">Distância do centro</label>
                    <input type="text" id="dist" class="form-control" name="distSite">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3 col-md-6" name="btnCadTecnico">Cadastrar Site</button>
            </div>
        </form>
    </div>
</div>