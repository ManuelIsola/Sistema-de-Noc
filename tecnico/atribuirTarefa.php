<?php require_once("menu.php");?>
<button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#modalAtribuirTarefa">
  Activar
</button>
<div class="modal fade modal-dialog modal-xl" id="modalAtribuirTarefa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Manutenção <i class="bi bi-gear"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="order-steps">
    <table class="orders-steps-progress" cellspacing="0" cellpadding="0">
        <tr class="bar">
            <td class="checked">
                <span class="step">1</span>
            </td>
            <td class="">
                <span class="step">2</span>
            </td>
            <td class="">
                <span class="step">3</span>
            </td>
        </tr>
        <tr class="labels">
            <td valign="top" class="label-checked">Informaçãos Geral</td>
            <td valign="top" class="">Dados de Atribuição</td>
            <td valign="top" class="">Dados de Execução</td>
        </tr>
    </table>
</div>
    <form id="stepForm">
    <fieldset class="step1 active">
            <div class="row g-2">
                <div class="col-md-4">
                    <label for="cod">Código</label>
                    <input type="text" id="cod" name="cod" class="form-control" value="MST008">
                </div>
                <div class="col-md-2">
                    <label for="refCliente">Referência do Cliente</label>
                    <input type="text" id="refCliente" name="refCliente" class="form-control" placeholder="Digite a Referência do Cliente">
                </div>
                <div class="col-md-2">
                    <label for="estadoAvaria" class="form-label">Estado</label>
                    <select class="form-select" id="estadoAvaria" name="estadoAvaria" style="margin-top: -10px;">
                        <option selected disabled>Escolha o Estado</option>
                        <option value="pendente">Pendente</option>
                        <Option value="atribuido">Atribuido</Option>
                        <option value="executado">Executado</option>
                        <option value="cancelado">Cancelado</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="pontoPro">Ponto de Produção</label>
                    <input type="text" id="pontoPro" name="pontoPro" class="form-control" value="UN2UG-0703 - LUANDA" readonly>
                </div>
                <div class="col-md-4">
                    <label for="reportAlarme" class="form-label">Alarme Reportado</label>
                    <select class="form-select" id="reportAlarme" name="reportAlarme" style="margin-top: -10px;">
                        <option selected disabled>Escolha o Alarme Reportado</option>
                        <option value="altaTemperatura">Alta Temperatura</option>
                        <option value="nivelCombustivel">Nível de Cobustível</option>
                        <option value="falhamotor">Falha no Motor</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="sla">SLA <span class="text-danger">*</span></label>
                    <input type="text" id="sla" name="sla" class="form-control" placeholder="Informe o SLA">
                </div>
                <div class="col-md-4">
                    <label for="OperadorCliente">Oprador Cliente <span class="text-danger">*</span></label>
                    <input type="text" id="OperadorCliente" name="OperadorCliente" class="form-control mt-2" >
                </div>
                <div class="col-md-4">
                    <label for="tecnCliente">Técnico do Cliente <span class="text-danger">*</span></label>
                    <input type="text" id="tecnCliente" name="tecnCliente" class="form-control mt-2" style="margin-top: -10px;">
                </div>
                <div class="col-md-2">
                    <label for="dataContaco">Data Contacto<span class="text-danger">*</span></label>
                    <input type="date" id="dataContaco" name="dataContaco" class="form-control mt-2">
                </div>
                <div class="col-md-2">
                    <label for="horaContaco">Hora Contacto <span class="text-danger">*</span></label>
                    <input type="time" id="horaContaco" name="horaContaco" class="form-control mt-2">
                </div>
                <div class="col-md-2">
                    <label for="dataAlarme">Data Alarme<span class="text-danger">*</span></label>
                    <input type="date" id="dataAlarme" name="dataAlarme" class="form-control mt-2">
                </div>
                <div class="col-md-2">
                    <label for="horaAlarme">Hora Contacto <span class="text-danger">*</span></label>
                    <input type="time" id="horaAlarme" name="horaAlarme" class="form-control mt-2">
                </div>
               <!--- Acho que estes campos não são tão importantes por isso não coloquei se achares que também valeu podes por a 
               mão na massa
                <div class="col-md-2">
                    <label for="dataQueda">Data Queda<span class="text-danger">*</span></label>
                    <input type="date" id="dataQueda" name="dataQueda" class="form-control mt-2">
                </div>
                <div class="col-md-2">
                    <label for="horaQueda">Hora Queda <span class="text-danger">*</span></label>
                    <input type="time" id="horaQueda" name="horaQueda" class="form-control mt-2">
                </div>
                -->
                <div class="col-md-3">
                    <label for="codGerado">Gerador(Nº de série - Código do Artigo)</label>
                    <input type="text" id="codGerado" name="codGerado" class="form-control" value="UN2UG-999 - 0082" readonly>
                </div>
                <div class="col-md-3">
                    <label for="dataPrevExec">Data Prevista da Execução <span class="text-danger">*</span></label>
                    <input type="date" id="dataPrevExec" name="dataPrevExec" class="form-control mt-2" >
                </div>
                <div class="col-md-3">
                    <label for="geradorCliente">Gerador do Cliente <span class="text-danger">*</span></label>
                    <input type="text" id="geradorCliente" name="geradorCliente" class="form-control mt-2" >
                </div>
                <div class="col-md-3">
                    <label for="tipoManut">Tipo de Manutenção <span class="text-danger">*</span></label>
                    <input type="text" id="tipoManut" name="tipoManut" class="form-control mt-2" value="A" readonly>
                </div>
                <div col-md-12>
                    <label for="textareaobser">Observações</label>
                    <textarea name="textareaobser" id="textareaobser" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
        </fieldset>
        <fieldset class="step2">
            <div class="row g-2">
                <div class="col-md-6">
                    <label for="exampleDataList" class="form-label">Técnico <span class="text-danger">*</span></label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Digite o nome do Técnico">
                        <datalist id="datalistOptions">
                        <option value="Baptista Cambundo">
                        <option value="Cirilo Hali">
                        <option value="Manuel Isola">
                        <option value="Moteiro Lando">
                        </datalist>
                </div>
                <div class="col-md-3">
                    <label for="dataContacotec">Data Contacto Técnico <span class="text-danger">*</span></label>
                    <input type="date" id="dataContacotec" name="dataContacotec" class="form-control mt-2">
                </div>
                <div class="col-md-3">
                    <label for="horaContacoTec">Hora Contacto Técnico <span class="text-danger">*</span></label>
                    <input type="time" id="horaContacoTec" name="horaContacoTec" class="form-control mt-2">
                </div>
            </div>
        </fieldset>

        <fieldset class="step3">
            <div class="row">
            <div class="col-md-6">
                    <label for="cauasAvaria" class="form-label">Causas da Avaria</label>
                    <select class="form-select" id="cauasAvaria" name="cauasAvaria">
                        <option selected disabled>Escolha a causa da avaria</option>
                        <option value="aquecimento">Aquecimento</option>
                        <option value="queimaPeca">Queima de Peça</option>
                        <option value="falhamotor">Falha no Motor</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="dataIntervencao">Data Início Intervenção <span class="text-danger">*</span></label>
                    <input type="date" id="dataIntervencao" name="dataIntervencao" class="form-control mt-2">
                </div>
                <div class="col-md-3">
                    <label for="horaInicio">Hora Início Intervenção <span class="text-danger">*</span></label>
                    <input type="time" id="horaInicio" name="horaInicio" class="form-control mt-2">
                </div>
                <div class="col-md-3">
                    <label for="dataFimIntervencao">Data Fim Intervenção <span class="text-danger">*</span></label>
                    <input type="date" id="dataIntervencao" name="dataIntervencao" class="form-control mt-2">
                </div>
                <div class="col-md-3">
                    <label for="horaFimIntervenção">Hora Fim Intervenção <span class="text-danger">*</span></label>
                    <input type="time" id="horaFimIntervenção" name="horaFimIntervenção" class="form-control mt-2">
                </div>
                <div class="col-md-3">
                    <label for="dataLeitura">Data/Hora Leitira <span class="text-danger">*</span></label>
                    <input type="datetime-local" id="dataLeitura" name="dataLeitura" class="form-control mt-2">                </div>
                <div class="col-md-12">
                    <label for="accoesTomadas">Acções Tomadas</label>
                    <textarea name="accoesTomadas" id="accoesTomadas" cols="30" rows="4" class="form-control"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="recomendacoes">Recomendações</label>
                    <textarea name="recomendacoes" id="recomendacoes" cols="30" rows="4" class="form-control"></textarea>
                </div>
            </div>
        </fieldset>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="prevBtn" disabled>Anterior</button>
        <button type="button" id="nextBtn">Próximo</button>
        <button type="submit" id="submitBtn" style="display: none;">Guardar</button>
      </div>
    </div>
  </div>
</div>
