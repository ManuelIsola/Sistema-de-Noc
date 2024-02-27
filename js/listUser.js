 // Simulação de dados na tabela
 var technicians = [
    { COD: 1, NOME: "João", BILHETE: "12345", EMAIL: "joao@example.com" },
    { COD: 2, NOME: "Maria", BILHETE: "54321", EMAIL: "maria@example.com" },
    // Adicione mais registros conforme necessário
];

// Número de registros por página
var recordsPerPage = 5;

// Número total de registros
var totalRecords = technicians.length;

// Número total de páginas
var totalPages = Math.ceil(totalRecords / recordsPerPage);

// Página atual (por padrão, a primeira página)
var currentPage = 1;

// Função para adicionar registros ao datalist
function updateDataList() {
    var dataList = document.getElementById("datalistOptions");
    dataList.innerHTML = "";
    technicians.forEach(function (technician) {
        var option = document.createElement("option");
        option.value = technician.NOME;
        dataList.appendChild(option);
    });
}

// Função para atualizar a tabela com os registros da página atual
function updateTable() {
    var tableBody = document.getElementById("userTableBody");
    tableBody.innerHTML = "";
    var startIndex = (currentPage - 1) * recordsPerPage;
    var visibleTechnicians = technicians.slice(startIndex, startIndex + recordsPerPage);
    visibleTechnicians.forEach(function (technician) {
        var row = tableBody.insertRow();
        row.insertCell(0).textContent = technician.COD;
        row.insertCell(1).textContent = technician.NOME;
        row.insertCell(2).textContent = technician.BILHETE;
        row.insertCell(3).textContent = technician.EMAIL;
        row.insertCell(4).textContent = "ações aqui";
    });
}

// Função para atualizar a paginação
function updatePagination() {
    var pagination = document.getElementById("pagination");
    pagination.innerHTML = "";
    for (var page = 1; page <= totalPages; page++) {
        var li = document.createElement("li");
        li.className = "page-item" + (page === currentPage ? " active" : "");
        var link = document.createElement("a");
        link.className = "page-link";
        link.href = "#";
        link.textContent = page;
        link.onclick = function (event) {
            currentPage = parseInt(event.target.textContent);
            updateTable();
            updatePagination();
        };
        li.appendChild(link);
        pagination.appendChild(li);
    }
}

// Atualizar datalist, tabela e paginação inicialmente
updateDataList();
updateTable();
updatePagination();

// Event listener para atualizar a tabela quando o usuário digitar no campo de nome
var nameInput = document.getElementById("exampleDataList");
nameInput.addEventListener("input", function () {
    var inputValue = nameInput.value.toLowerCase();
    var filteredTechnicians = technicians.filter(function (technician) {
        return technician.NOME.toLowerCase().includes(inputValue);
    });
    currentPage = 1; // Resetar para a primeira página ao filtrar
    totalRecords = filteredTechnicians.length;
    totalPages = Math.ceil(totalRecords / recordsPerPage);
    updateTable();
    updatePagination();
});