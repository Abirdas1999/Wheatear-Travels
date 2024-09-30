function validateForm() {
  var question = document.getElementById("question").value;
  var answer = document.getElementById("answer").value;

  if (question == "") {
    alert("Question is required");
    return false;
  }
  if (answer == "") {
    alert("Answer is required");
    return false;
  }
  return true;
}

function showData() {
  var packageList;
  if (localStorage.getItem("packageList") == null) {
    packageList = [];
  } else {
    packageList = JSON.parse(localStorage.getItem("packageList"));
  }

  var tableBody = document.querySelector("#tableCrud tbody");
  tableBody.innerHTML = "";

  packageList.forEach(function (element, index) {
    var row = tableBody.insertRow();
    var questionCell = row.insertCell(0);
    var answerCell = row.insertCell(1);

    questionCell.textContent = element.question;
    answerCell.textContent = element.answer;

    var deleteCell = row.insertCell(2);
    var deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.className = "btn btn-danger";
    deleteButton.onclick = function () {
      deleteData(index);
    };
    deleteCell.appendChild(deleteButton);
  });
}

window.onload = function () {
  showData();
};

function addData() {
  if (validateForm()) {
    var question = document.getElementById("question").value;
    var answer = document.getElementById("answer").value;

    var packageList;
    if (localStorage.getItem("packageList") == null) {
      packageList = [];
    } else {
      packageList = JSON.parse(localStorage.getItem("packageList"));
    }
    packageList.push({
      question: question,
      answer: answer,
    });
    localStorage.setItem("packageList", JSON.stringify(packageList));
    showData();
    document.getElementById("question").value = "";
    document.getElementById("answer").value = "";
  }
}

function deleteData(index) {
  var packageList = JSON.parse(localStorage.getItem("packageList"));
  packageList.splice(index, 1);
  localStorage.setItem("packageList", JSON.stringify(packageList));
  showData();
}

