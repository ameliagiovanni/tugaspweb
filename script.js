document
  .getElementById("orderForm")
  ?.addEventListener("submit", function (event) {
    alert("Data mahasiswa berhasil disimpan!");
  });

function loadMahasiswa() {
  fetch("view.php")
    .then((response) => response.json())
    .then((data) => {
      const tbody = document.querySelector("#mahasiswa tbody");
      tbody.innerHTML = "";
      data.forEach((mahasiswa) => {
        const row = document.createElement("tr");
        Object.values(mahasiswa).forEach((text) => {
          const cell = document.createElement("td");
          cell.textContent = text;
          row.appendChild(cell);
        });
        tbody.appendChild(row);
      });
    });
}
