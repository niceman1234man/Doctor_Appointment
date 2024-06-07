function date() {
  const now = new Date();
  const day = now.getDay();
  const month = now.getMonth();
  const year = now.getFullYear();

  document.querySelector('.todaysDate').innerHTML += ` ${day}/${month}/${year}`;
}
date();
const disp1=displaySetting();
const disp2=displayDetail();
const disp3=displayDelete();
const backPage=document.getElementById('myApointment');
function  bluredBackPage(){
  backPage.style.left = '0';
  backPage.style.width = '100%';
  backPage.style.height = '100%';
  backPage.style.zIndex = '9999';
  backPage.style.backgroundColor = 'rgba(0, 0, 0, 0)';
}
function displaySetting() {
  document.querySelector('.accountSetting').classList.add("active");
}
function hidSetting() {
  document.querySelector('.accountSetting').classList.remove("active");
  
}

function displayDetail() {
  document.querySelector('.viewdetail').classList.add("active");
}
function hidDetail() {
  document.querySelector('.viewdetail').classList.remove("active");
  
}
function displayDelete() {
  document.querySelector('.confiDelet').classList.add("active");

}
function hidDelete() {
  document.querySelector('.confiDelet').classList.remove("active");
  
}
while(disp1()||disp2()||disp3()){
  backPage();
}
hidDetail();
displayDelete();
hidDelete();



