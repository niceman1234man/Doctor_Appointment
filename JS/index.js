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

// Get the form and input elements
const form = document.querySelector('.add-new-doctors form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const nicInput = document.getElementById('nic');
const telephoneInput = document.getElementById('telephone');
const passwordInput = document.getElementById('password');
const confirmInput = document.getElementById('confirm');

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
// Add event listener to the form submission
form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent the form from submitting
  // Reset the error messages
  nameInput.classList.remove('is-invalid');
  emailInput.classList.remove('is-invalid');
  nicInput.classList.remove('is-invalid');
  telephoneInput.classList.remove('is-invalid');
  passwordInput.classList.remove('is-invalid');
  confirmInput.classList.remove('is-invalid');

  // Perform validation checks
  let isValid = true;

  if (nameInput.value.trim() === '') {
    nameInput.classList.add('is-invalid');
    isValid = false;
  }

  if (!isValidEmail(emailInput.value)) {
    emailInput.classList.add('is-invalid');
    isValid = false;
  }
  if (nicInput.value.trim() === '' || Number.isNaN(Number(nicInput.value.trim()))) {
    nicInput.classList.add('is-invalid');
    isValid = false;
  } else {
    nicInput.classList.remove('is-invalid');
  }
  if (telephoneInput.value.trim() === '' || Number.isNaN(Number(telephoneInput.value.trim()))) {
    telephoneInput.classList.add('is-invalid');
    isValid = false;
  } else {
    telephoneInput.classList.remove('is-invalid');
  }
  if (passwordInput.value.trim() === '') {
    passwordInput.classList.add('is-invalid');
    isValid = false;
  }

  if (confirmInput.value.trim() === '' || confirmInput.value !== passwordInput.value) {
    confirmInput.classList.add('is-invalid');
    isValid = false;
  }

  if (isValid) {
    // Submit the form if all validations pass
    form.submit();
  }
});

// Helper function to validate email
