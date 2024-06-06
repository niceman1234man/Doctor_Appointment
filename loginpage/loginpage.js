document.addEventListener('DOMContentLoaded', () => {
  const loginLink = document.getElementById('login-link');
  const signupLink = document.getElementById('signup-link');

  if (loginLink) {
    loginLink.addEventListener('click', (event) => {
      event.preventDefault();
      window.location.href = 'login.html'; // Redirect to login.html
    });
  }

  if (signupLink) {
    signupLink.addEventListener('click', (event) => {
      event.preventDefault();
      window.location.href = 'signup.html'; // Redirect to signup.html
    });
  }
});