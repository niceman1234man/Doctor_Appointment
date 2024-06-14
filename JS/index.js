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

// document.querySelector('#today-date').appendChild(datee);
document.getElementById('add-button').addEventListener('click', () => {
  document.getElementById('name').focus();
});

// Get all the "View" buttons

// Add a click event listener to each "View" button




