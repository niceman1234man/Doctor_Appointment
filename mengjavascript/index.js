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
/// ///////////////
function cancelApointment() {
  document.querySelector('.cancelApoin').classList.add('active');
}
function hidCancelApointment() {
  document.querySelector('.cancelApoin').classList.remove('active');
}

function displaySession() {
  document.querySelector('.viewSession').classList.add('active');
}
function hidSession() {
  document.querySelector('.viewSession').classList.remove('active');
}
function displayCancelSesion() {
  document.querySelector('.cancelSession').classList.add('active');
}
function hidCancelSesion() {
  document.querySelector('.cancelSession').classList.remove('active');
}
/// /////////////////////////
function displayPationtDetail() {
  document.querySelector('.viewPationt').classList.add('active');
}
function hidPationtDetail() {
  document.querySelector('.viewPationt').classList.remove('active');
}
/// ///////////////
function displaySetting1() {
  document.querySelector('.accountSetting1').classList.add('active');
}
function displaySetting2() {
  document.querySelector('.accountSetting2').classList.add('active');
}
//
displaySetting();
hidSetting();
displayDetail();
hidDetail();
displayDelete();
hidDelete();
cancelApointment();
hidCancelApointment();
displaySession();
hidSession();
displayCancelSesion();
hidCancelSesion();
displayPationtDetail();
hidPationtDetail();
displaySetting1();
displaySetting2();