function validateForm() {
  const name = document.getElementById(name).value;
  const mail = document.getElementById(mail).value;
  const phone = document.getElementById(phone).value;
  const travel = document.getElementById(travel).value;
  const count = document.getElementById(count).value;

  if (
    name === "" ||
    email === "" ||
    phone === "" ||
    travel === "" ||
    count === ""
  ) {
    alert("Fields are mandatory");
    return false;
  }
  return true;
}

const standardBtns = document.getElementsByClassName("hotel-card");

for (let i = 0; i < standardBtns.length; i++) {
  standardBtns[i].addEventListener("click", (e) => {
    resetBackgroundColors(); // Reset all button background colors
    standardBtns[i].style.backgroundColor = "rgb(231, 231, 231)"; // Set clicked button's background color
  });
}

function resetBackgroundColors() {
  for (let i = 0; i < standardBtns.length; i++) {
    standardBtns[i].style.backgroundColor = "rgb(230, 255, 117)"; // Reset background color for all buttons
  }
}
function openCheckout() {
  window.location.href = 'checkout.php';
  // var div = document.createElement("div");
 

    
}
function openCheckout1() {
  window.location.href = 'checkout1.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
function openCheckout2() {
  window.location.href = 'checkout2.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
function openCheckout3() {
  window.location.href = 'checkout3.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
function openCheckout4() {
  window.location.href = 'checkout4.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
function openCheckout5() {
  window.location.href = 'checkout5.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
function openCheckout6() {
  window.location.href = 'checkout6.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
function openCheckout7() {
  window.location.href = 'checkout7.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
function openCheckout8() {
  window.location.href = 'checkout8.php';
  // var div = document.createElement("div");
  var filename = fullPath.split("/").pop();
  document.getElementById("result").value = filename;
  console.log(filename)

    
}
