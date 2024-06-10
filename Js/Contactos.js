function searchTable() {
    const input = document.getElementById("search-input").value.toLowerCase();
    const table = document.getElementsByTagName("table")[0];
    const rows = table.getElementsByTagName("tr");
  
    for (let i = 1; i < rows.length; i++) {
      const nameCell = rows[i].getElementsByTagName("td")[0];
      const emailCell =rows[i].getElementsByTagName("td")[1];
      if (nameCell) {
        const name = nameCell.innerText.toLowerCase();
        if (name.includes(input) || input == i || emailCell.includes(input)) {
          rows[i].style.display = "";
        } else {
          rows[i].style.display = "none";
        }
      }
    }
  }
  