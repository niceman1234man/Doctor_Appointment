





// Your JavaScript code goes here
document.getElementById('add-new-button').onclick = () => {
  document.querySelector('.add-new-doctors-pop-up').classList.add('active');
}

// AJAX form submission
document.getElementById('add-button').addEventListener('click', function (event) {
  event.preventDefault(); // Prevent the default form submission

  // Gather the form data
  var formData = new FormData(document.querySelector('form'));

  // Use AJAX to send the form data to the server
  fetch('New_session.php', {
    method: 'POST',
    body: formData
  })
    .then(function (response) {
      // Handle the response from the server
      if (response.ok) {
        // Display a success message or update the page
        console.log('New session added!');
        // Hide the popup
        document.querySelector('.add-new-doctors-pop-up').classList.remove('active');
      } else {
        // Display an error message
        console.error('Error adding new session');
      }
    })
    .catch(function (error) {
      // Handle any errors that occurred during the AJAX request
      console.error('Error:', error);
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
})

// Get all the "View" buttons
const viewButtons = document.querySelectorAll('.view-button');

// Add a click event listener to each "View" button
viewButtons.forEach(button => {
  button.addEventListener('click', showDoctorDetails);
});

function showDoctorDetails(event) {
  // Get the table row that contains the clicked "View" button
  const row = event.target.closest('tr');

  // Extract the doctor's information from the row
  const name = row.querySelector('td:first-child').textContent;
  const email = row.querySelector('td:nth-child(2)').textContent;
  const nic = row.querySelector('td:nth-child(3)').textContent;
  const telephone = row.querySelector('td:nth-child(4)').textContent;
  const speciality = row.querySelector('td:nth-child(5)').textContent;

  // Update the "doctor-detail-pop-up" div with the doctor's information
  const detailPopup = document.querySelector('.doctor-detail-pop-up');
  detailPopup.querySelector('p:nth-child(2)').textContent = name;
  detailPopup.querySelector('p:nth-child(4)').textContent = email;
  detailPopup.querySelector('p:nth-child(6)').textContent = nic;
  detailPopup.querySelector('p:nth-child(8)').textContent = telephone;
  detailPopup.querySelector('p:nth-child(10)').textContent = speciality;

  // Show the "doctor-detail-pop-up" div
  detailPopup.style.display = 'block';
  document.querySelector('.view').append(detailPopup);
}