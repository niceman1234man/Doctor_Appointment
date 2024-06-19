const viewpopup = document.getElementById("viewPopup");
const all = document.getElementById("all");

function view() {
  viewpopup.classList.add("visible");
  all.classList.add("whole_blure");
   
}

function closeView() {
  viewpopup.classList.remove("visible");
  all.classList.remove("whole_blure");
}