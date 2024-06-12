// Your JavaScript code goes here
document.getElementById('add-new-button').onclick = () => {
  document.querySelector('.add-new-doctors-pop-up').classList.add('active');
};

// AJAX form submission
document.getElementById('add-button').addEventListener('click', (event) => {
  event.preventDefault(); // Prevent the default form submission

  // Gather the form data
  const formData = new FormData(document.querySelector('form'));

  // Use AJAX to send the form data to the server
  fetch('New_session.php', {
    method: 'POST',
    body: formData,
  })
    .then((response) => {
      // Handle the response from the server
      if (response.ok) {
        // Display a success message or update the page

        // Hide the popup
        document.querySelector('.add-new-doctors-pop-up').classList.remove('active');
      } else {
        // Display an error message

      }
    });
});
// document.querySelector('#add-new-button').addEventListener('click', () => {

// });
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
document.getElementById('add-button').addEventListener('click', () => {
  document.getElementById('name').focus();
});

// Get all the "View" buttons

// Add a click event listener to each "View" button
