<?php require_once("menu.php"); ?>

<div class="container">
    <div class="row mt-5">
        <h2 class="text-center mt-5">Gerar Relatório</h2>
        <h2 class="text-center"><i class="bi bi-card-text"></i></h2>
        <form action="#" method="POST" name="frmCadClients" class="g-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                <label for="report">Tipo de Relatório</label>
                    <select id="report" class="form-select" name="report">
                        <option value="diario">Diário</option>
                        <option value="semanal">Semanal</option>
                        <option value="mensal">Mensal</option>
                        <option value="trimestral">Trimestral</option>
                        <option value="anual">Anual</option>
                    </select>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inicio" class="form-label">Data de Início</label>
                            <input type="date" id="inicio" class="form-control" name="dataInicio">
                        </div>
                        <div class="col-md-6">
                            <label for="fim" class="form-label">Data do Fim</label>
                            <input type="date" id="fim" class="form-control" name="dataFim">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3 col-md-6" name="btnCadTecnico">Cadastrar Cliente</button>
            </div>
        </form>
    </div>
</div>