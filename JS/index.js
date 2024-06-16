// Your JavaScript code goes here
document.getElementById('add-new-button').onclick = () => {
  document.querySelector('.add-new-doctors-pop-up').classList.add('active');
};

// AJAX form submission
document.getElementById('add-button').addEventListener('click', (event) => {
  event.preventDefault(); // Prevent the default form submission

  document.querySelector('.add-new-doctors-pop-up').classList.remove('active');

  document.querySelector('#x-sign').addEventListener('click', () => {
    document.querySelector('.add-new-doctors-pop-up').classList.remove('active');
  });

  document.querySelector('.view-button').addEventListener('click', () => {
    document.querySelector('.schedule-detail-pop-up').classList.add('active');
  });
});