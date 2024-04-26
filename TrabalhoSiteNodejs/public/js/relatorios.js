// relatorios.js
$(document).ready(function() {
    
    function loadReportByGender() {
        $.ajax({
            url: "http://localhost:3000/reportByGender",
            method: "GET",
            success: function(data) {
                $('#leadsReportTable tbody').empty();
                data.forEach(row => {
                    $('#leadsReportTable tbody').append(`
                        <tr>
                            <td>${row.genero}</td>
                            <td>${row.count}</td>
                        </tr>
                    `);
                });
            },
            error: function(err) {
                alert("Erro ao carregar relatório por gênero!");
                console.error("Erro: ", err);
            }
        });
    }

    function loadReportByStatus() {
        $.ajax({
            url: "http://localhost:3000/reportByStatus",
            method: "GET",
            success: function(data) {
                $('#leadsReportTable tbody').empty();
                data.forEach(row => {
                    $('#leadsReportTable tbody').append(`
                        <tr>
                            <td>${row.situacao}</td>
                            <td>${row.count}</td>
                        </tr>
                    `);
                });
            },
            error: function(err) {
                alert("Erro ao carregar relatório por situação!");
                console.error("Erro: ", err);
            }
        });
    }
	
	    function loadReportByGender() {
        $.ajax({
            url: "http://localhost:3000/reportByGender",
            method: "GET",
            success: function(data) {
                $('#leadsReportTable tbody').empty();
                let total = 0;
                data.forEach(row => {
                    total += parseInt(row.count);
                    $('#leadsReportTable tbody').append(`
                        <tr>
                            <td>${row.genero}</td>
                            <td>${row.count}</td>
                        </tr>
                    `);
                });
                // Set the total to the table footer
                document.getElementById('totalValue').textContent = total;
            },
            error: function(err) {
                alert("Erro ao carregar relatório por gênero!");
                console.error("Erro: ", err);
            }
        });
    }

    function loadReportByStatus() {
        $.ajax({
            url: "http://localhost:3000/reportByStatus",
            method: "GET",
            success: function(data) {
                $('#leadsReportTable tbody').empty();
                let total = 0;
                data.forEach(row => {
                    total += parseInt(row.count);
                    $('#leadsReportTable tbody').append(`
                        <tr>
                            <td>${row.situacao}</td>
                            <td>${row.count}</td>
                        </tr>
                    `);
                });
                // Set the total to the table footer
                document.getElementById('totalValue').textContent = total;
            },
            error: function(err) {
                alert("Erro ao carregar relatório por situação!");
                console.error("Erro: ", err);
            }
        });
    }
    
    document.getElementById('goToUsers').addEventListener('click', function() {
        window.location.href = "users";
    });
    
    // Event listeners
    document.getElementById('reportByGender').addEventListener('click', loadReportByGender);
    document.getElementById('reportByStatus').addEventListener('click', loadReportByStatus);
});

//Modal
const openModalButton = document.querySelector("#open-modal");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
    [modal, fade].forEach((el) => el.classList.toggle("hide"));
};

[openModalButton, closeModalButton, fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});

//DownloadExel
document.getElementById('downloadExcel').addEventListener('click', function () {
    const wb = XLSX.utils.book_new();
    const ws = XLSX.utils.table_to_sheet(document.getElementById('leadsTable'));
    XLSX.utils.book_append_sheet(wb, ws, "Leads");
    XLSX.writeFile(wb, "leads.xlsx");
});

document.getElementById('goToReports').addEventListener('click', function () {
    window.location.href = "/relatorios";
});

/*
document.getElementById('goToUsers').addEventListener('click', function () {
    window.location.href = "users";
});
*/