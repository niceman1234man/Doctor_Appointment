document.querySelector('#add-new-button').addEventListener('click', () => {
  document.querySelector('.add-new-doctors-pop-up').classList.add('active');
});
document.querySelector('#x-sign').addEventListener('click', () => {
  document.querySelector('.add-new-doctors-pop-up').classList.remove('active');
});
const date = new Date();
const day = date.getDate();
const month = date.getMonth();
const year = date.getFullYear();
document.getElementById('today-date').append(`${day}/${month}/${year}`);
// document.querySelector('#today-date').appendChild(datee);

document.querySelector('.view-button').addEventListener('click', () => {
  document.querySelector('.schedule-detail-pop-up').classList.add('active');
});
document.querySelector('#xs-sign').addEventListener('click', () => {
  document.querySelector('.schedule-detail-pop-up').classList.remove('active');
});
document.querySelector('.view-button').addEventListener('click', () => {
  document.querySelector('.doctor-detail-pop-up').classList.add('active');
});
document.querySelector('#xd-sign').addEventListener('click', () => {
  document.querySelector('.doctor-detail-pop-up').classList.remove('active');
});
document.querySelector('#view-patient-buttons').addEventListener('click', () => {
  document.querySelector('.patients-detail-pop-up').classList.add('active');
});
document.querySelector('#x-sign').addEventListener('click', () => {
  document.querySelector('.patients-detail-pop-up').classList.remove('active');
});