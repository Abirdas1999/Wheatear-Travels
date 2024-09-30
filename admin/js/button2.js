var currentPage = 1;
var itemsPerPage = 10;

function validateForm() {
  var name = document.getElementById("name").value;
  var heading = document.getElementById("heading").value;
  var price = document.getElementById("price").value;

  if (name == "") {
    alert("Package name is required");
    return false;
  }
  if (heading == "") {
    alert("Package heading is required");
    return false;
  }
  if (price == "") {
    alert("Package price is required");
    return false;
  }

  return true;
}

function showData() {
  var packageList = JSON.parse(localStorage.getItem("packageList")) || [];
  var tableBody = document.querySelector("#tableCrud tbody");
  tableBody.innerHTML = "";

  var startIndex = (currentPage - 1) * itemsPerPage;
  var endIndex = Math.min(startIndex + itemsPerPage, packageList.length);

  for (var i = startIndex; i < endIndex; i++) {
    var row = tableBody.insertRow();
    row.insertCell(0).textContent = packageList[i].serial;
    row.insertCell(1).textContent = packageList[i].name;
    row.insertCell(2).textContent = packageList[i].heading;
    row.insertCell(3).textContent = packageList[i].price;

    var deleteCell = row.insertCell(4);
    var deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.className = "btn btn-danger";
    deleteButton.onclick = (function (index) {
      return function () {
        deleteData(index);
      };
    })(i);
    deleteCell.appendChild(deleteButton);
  }

  updatePagination(packageList.length);
}

function updatePagination(totalItems) {
  var totalPages = Math.ceil(totalItems / itemsPerPage);
  document.getElementById(
    "pageInfo"
  ).textContent = `Page ${currentPage} of ${totalPages}`;

  document.getElementById("prevPage").disabled = currentPage == 1;
  document.getElementById("nextPage").disabled = currentPage == totalPages;
}

document.getElementById("prevPage").onclick = function () {
  if (currentPage > 1) {
    currentPage--;
    showData();
  }
};

document.getElementById("nextPage").onclick = function () {
  var packageList = JSON.parse(localStorage.getItem("packageList"));
  var totalPages = Math.ceil(packageList.length / itemsPerPage);
  if (currentPage < totalPages) {
    currentPage++;
    showData();
  }
};

window.onload = function () {
  showData();
};

function addData() {
  if (validateForm()) {
    var serial = document.getElementById("serial").value;
    var name = document.getElementById("name").value;
    var heading = document.getElementById("heading").value;
    var price = document.getElementById("price").value;

    var packageList = JSON.parse(localStorage.getItem("packageList")) || [];
    packageList.push({
      serial: serial,
      name: name,
      heading: heading,
      price: price,
    });

    localStorage.setItem("packageList", JSON.stringify(packageList));
    showData();

    document.getElementById("serial").value = "";
    document.getElementById("name").value = "";
    document.getElementById("heading").value = "";
    document.getElementById("price").value = "";
  }
}

function deleteData(index) {
  var packageList = JSON.parse(localStorage.getItem("packageList"));
  packageList.splice(index, 1);
  localStorage.setItem("packageList", JSON.stringify(packageList));
  showData();
}