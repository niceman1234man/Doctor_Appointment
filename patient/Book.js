const popUp = document.getElementById("wow");
const try1 = document.createElement("div");

function deletefun(num1, num2) {
  try1.innerHTML = `<p>ARE YOU SURE YOU WANT TO CANCEL BOOKING?</p>
                   <button onclick="Yes(${num1},${num2})" class="yes">YES</button>
                    <button onclick="NO(this)" class="no ">NO</button>`;

  popUp.classList.add("popUp_visible");
  popUp.appendChild(try1);
}

function Yes(numappoint, scheduleid) {
  const url = "dataBase.php?num=1&value=" + numappoint + "," + scheduleid;
  window.location.href = url;
}


function NO(popUp) {
  popUp.classList.remove("PopUp_visible");
  window.location = 'Book.php';
}