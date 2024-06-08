function date() {
  const now = new Date();
  const day = now.getDay();
  const month = now.getMonth();
  const year = now.getFullYear();

  document.querySelector('.todaysDate').innerHTML += ` ${day}/${month}/${year}`;
}
date();
function displaySetting() {
  document.querySelector('.accountSetting').classList.add('active');
}
function hidSetting() {
  document.querySelector('.accountSetting').classList.remove('active');
}

function displayDetail() {
  document.querySelector('.viewdetail').classList.add('active');
}
function hidDetail() {
  document.querySelector('.viewdetail').classList.remove('active');
}
function displayDelete() {
  document.querySelector('.confiDelet').classList.add('active');
}
function hidDelete() {
  document.querySelector('.confiDelet').classList.remove('active');
}
displaySetting();
hidSetting();
displayDetail();
hidDetail();
displayDelete();
hidDelete();
