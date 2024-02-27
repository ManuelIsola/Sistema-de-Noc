<?php require_once("menu.php");?>
<?php require_once("modais.php");?>

<div class="container" style="margin-top: 100px;">
  <div class="row row-cols-1 row-cols-md-3 g-2">
    <div class="col">
      <div class="card text-center" data-bs-toggle="modal" data-bs-target="#ModalTotalAlarme">
        <div class="card-body">
          <div class="text-start">
            <h5 class="card-title">Total de Alarmes</h5>
            <p class="card-info">100</p>
          </div>
          <i class="bi bi-bell-fill icon icon-bell"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" data-bs-toggle="modal" data-bs-target="#ModalTotalAlarmePendentes">
        <div class="card-body">
          <div class="text-start">
            <h5 class="card-title">Total de Alarmes Pendentes</h5>
            <p class="card-info">25</p>
          </div>
          <i class="bi bi-exclamation-triangle-fill icon icon-triangle"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" data-bs-toggle="modal" data-bs-target="#ModalTotalAlarmeAtribuidos">
        <div class="card-body">
          <div class="text-start">
            <h5 class="card-title">Total de Alarmes Atribuídos</h5>
            <p class="card-info">50</p>
          </div>
          <i class="bi bi-person-fill-gear icon icon-clock"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" data-bs-toggle="modal" data-bs-target="#ModalTotalAlarmeExecutados">
        <div class="card-body">
          <div class="text-start">
            <h5 class="card-title">Total de Alarmes Executados</h5>
            <p class="card-info">30</p>
          </div>
          <i class="bi bi-check-circle-fill icon icon-circle"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" data-bs-toggle="modal" data-bs-target="#ModalTotalAlarmeCancelados">
        <div class="card-body">
          <div class="text-start">
            <h5 class="card-title">Total de Alarmes Cancelados</h5>
            <p class="card-info">10</p>
          </div>
          <i class="bi bi-x-circle-fill icon icon-x"></i>
        </div>
      </div>
    </div>
  </div>
 <!-- #region Tabela-->
 <div class="row">
    <div class="col-md-9">
      <h4 class="mt-4">Alarmes Pendentes</h4>
    </div>
    <div class="col-md-3">
      <div class="form-group text-end">
        <label for="recordsPerPage">Registros por página:</label>
        <select class="form-select" id="recordsPerPage">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
        </select>
      </div>
    </div>
  </div>
  
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Data</th>
          <th>Descrição</th>
          <th>Localização</th>
          <th>Gravidade</th>
          <th>SLA</th>
        </tr>
      </thead>
      <tbody id="alarmTable">
        <!-- Registros serão adicionados aqui -->
      </tbody>
    </table>
  </div>

  <nav aria-label="Page navigation2">
    <ul class="pagination justify-content-center" id="pagination2">
      <!-- Paginação será adicionada aqui -->
    </ul>
  </nav>
</div>

</div>
<script src="../js/tabela2.js"></script>