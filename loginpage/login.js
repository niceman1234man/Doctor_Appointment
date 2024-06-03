document.addEventListener('DOMContentLoaded', () => {
  const loginLink = document.getElementById('login-link');

  if (loginLink) {
    loginLink.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent the default link behavior
      window.location.href = 'login.html'; // Redirect to login.html
    });
  }
});

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contact-form');
  const emailInput = document.getElementById('email');
  const errorMessage = document.getElementById('error-message');

  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const email = emailInput.value;

    if (email === email.toLowerCase()) {
      form.submit();
    } else {
      errorMessage.textContent = 'Please enter your email in lowercase.';
    }
  });
});
