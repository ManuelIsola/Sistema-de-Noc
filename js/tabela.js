// Função para preencher a tabela com registros fictícios
function fillTable(recordsPerPage, currentPage) {
  var tableBody = document.getElementById("alarmTableBody");
  tableBody.innerHTML = ""; // Limpa o conteúdo da tabela antes de preencher

  // Simulando registros fictícios
  var totalRecords = 50;
  var startIndex = (currentPage - 1) * recordsPerPage + 1;
  var endIndex = Math.min(currentPage * recordsPerPage, totalRecords);

  for (var i = startIndex; i <= endIndex; i++) {
    var date = new Date().toLocaleDateString();
    var description = "Descrição do alarme #" + i;
    var location = "Localização #" + i;
    var severity = "Alta";
    var slaColor = calculateSlaColor(i); // Calcula a cor do SLA

    var row = `
      <tr>
        <td>${i}</td>
        <td>${date}</td>
        <td>${description}</td>
        <td>${location}</td>
        <td>${severity}</td>
        <td><span class="sla-circle" style="background-color: ${slaColor};"></span></td>
      </tr>
    `;
    tableBody.insertAdjacentHTML("beforeend", row);
  }
}

// Função para calcular a cor do SLA
function calculateSlaColor(index) {
  // Suponha que o SLA seja de 5 dias
  var daysLeft = index % 10; // Simulação de tempo restante até o vencimento
  if (daysLeft <= 1) {
    return "#ff0000"; // Vermelho - fora do prazo
  } else if (daysLeft <= 2) {
    return "#ff8c00"; // Laranja
  } else if (daysLeft <= 3) {
    return "#ffd700"; // Amarelo
  } else if (daysLeft <= 4) {
    return "#32cd32"; // Verde
  } else {
    return "#008000"; // Verde escuro
  }
}

// Função para criar os links de paginação
function createPagination(totalPages, currentPage) {
  var pagination = document.getElementById("pagination");
  pagination.innerHTML = ""; // Limpa o conteúdo da paginação antes de criar

  // Adiciona botão "Anterior"
  var previousPageBtn = `
    <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Anterior</a>
    </li>
  `;
  pagination.insertAdjacentHTML("beforeend", previousPageBtn);

  // Adiciona links das páginas
  for (var i = 1; i <= totalPages; i++) {
    var pageLink = `
      <li class="page-item ${currentPage === i ? 'active' : ''}">
        <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
      </li>
    `;
    pagination.insertAdjacentHTML("beforeend", pageLink);
  }

  // Adiciona botão "Próximo"
  var nextPageBtn = `
    <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Próximo</a>
    </li>
  `;
  pagination.insertAdjacentHTML("beforeend", nextPageBtn);
}

// Função para alterar a página
function changePage(page) {
  var recordsPerPage = parseInt(document.getElementById("recordsPerPage").value);
  fillTable(recordsPerPage, page);
  createPagination(10, page); // Supondo que haja 10 páginas no total
}

// Inicialização da tabela
document.addEventListener("DOMContentLoaded", function() {
  var recordsPerPage = 5; // Altere conforme necessário
  fillTable(recordsPerPage, 1);
  createPagination(10, 1); // Supondo que haja 10 páginas no total
});
