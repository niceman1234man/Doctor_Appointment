document.querySelector('#add-new-button').addEventListener('click', () => {
  document.querySelector('.add-new-doctors-pop-up').classList.add('active');
});
document.querySelector('#x-sign').addEventListener('click', () => {
  document.querySelector('.add-new-doctors-pop-up').classList.remove('active');
});

// document.querySelector('#today-date').appendChild(datee);

document.querySelector('.view-button').addEventListener('click', () => {
  document.querySelector('.schedule-detail-pop-up').classList.add('active');
});
<<<<<<< HEAD

// Get all the "View" buttons

// Add a click event listener to each "View" button




=======
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
>>>>>>> 8dce2b351f416c862ffa1616a5fc39a6db945808
