<!-- Modal Total de Alarmes -->
<div class="modal fade modal-dialog modal-xl" id="ModalTotalAlarme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Total de Alarmes <i class="bi bi-bell-fill icon icon-bell"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                <th>ID</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Localização</th>
                <th>Gravidade</th>
                <th>SLA</th>
                </tr>
            </thead>
            <tbody id="alarmTableBody">
                <!-- Registros serão adicionados aqui -->
            </tbody>
            </table>
        </div>

       <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center" id="pagination">
            Paginação será adicionada aqui 
            </ul>
        </nav>
        </div>

      </div>
    </div>
  </div>
</div>


<!-- Modal Total de Alarmes Pendentes -->
<div class="modal fade modal-dialog modal-xl" id="ModalTotalAlarmePendentes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Total de Alarmes Pendentes<i class="bi bi-exclamation-triangle-fill icon icon-triangle"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Localização</th>
                <th>Gravidade</th>
                <th>SLA</th>
              </tr>
            </thead>
            <tbody id="alarmTableBody">
              <!-- Registros serão adicionados aqui -->
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
</div>

<!-- Modal Total de Alarmes Atribuidos -->
<div class="modal fade modal-dialog modal-xl" id="ModalTotalAlarmeAtribuidos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Total de Alarmes Atribuidos<i class="bi bi-person-fill-gear icon icon-clock"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Localização</th>
                <th>Gravidade</th>
                <th>SLA</th>
              </tr>
            </thead>
            <tbody id="alarmTableBody">
              <!-- Registros serão adicionados aqui -->
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
</div>

<!-- Modal Total de Alarmes Executados -->
<div class="modal fade modal-dialog modal-xl" id="ModalTotalAlarmeExecutados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Total de Alarmes Executados<i class="bi bi-check-circle-fill icon icon-circle"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Localização</th>
                <th>Gravidade</th>
                <th>SLA</th>
              </tr>
            </thead>
            <tbody id="alarmTableBody">
              <!-- Registros serão adicionados aqui -->
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
</div>

<!-- Modal Total de Alarmes Executados -->
<div class="modal fade modal-dialog modal-xl" id="ModalTotalAlarmeCancelados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Total de Alarmes Cancelados <i class="bi bi-x-circle-fill icon icon-x"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Localização</th>
                <th>Gravidade</th>
                <th>SLA</th>
              </tr>
            </thead>
            <tbody id="alarmTableBody">
              <!-- Registros serão adicionados aqui -->
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
</div>


<script src="../js/tabela.js"></script>