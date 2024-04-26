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

document.getElementById('goToUsers').addEventListener('click', function () {
    window.location.href = "/users";
});