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

document.querySelector('.view-button').addEventListener('click', () => {
  document.querySelector('.schedule-detail-pop-up').classList.add('active');
});


// Get all the "View" buttons

// Add a click event listener to each "View" button





// Get all the "View" buttons

// Add a click event listener to each "View" button





document.querySelector('#delete').onclick=function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this session?")) {
        // Submit the form to delete the session
        const form = document.createElement('form');
        form.method = 'post';
        form.action = 'delete_session.php';

        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'id';
        input.value = id;

        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
    }
};
