(function () {
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('account-details-form');
    const emailInput = document.getElementById('email');
    const dobInput = document.getElementById('dob');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const errorMessage = document.getElementById('error-message');

    function validatePassword() {
      const password = passwordInput.value;
      const confirmPassword = confirmPasswordInput.value;

      if (password !== confirmPassword) {
        errorMessage.textContent = 'Passwords do not match!';
      } else {
        errorMessage.textContent = '';
      }
    }

    async function checkUsernameAvailability(username) {
      return new Promise((resolve) => {
        setTimeout(() => {
          const takenUsernames = ['admin', 'user', 'test'];
          resolve(!takenUsernames.includes(username));
        }, 500);
      });
    }

    form.addEventListener('submit', async (event) => {
      event.preventDefault();

      const email = emailInput.value.trim();
      const dob = new Date(dobInput.value);
      const today = new Date();
      const username = usernameInput.value.trim();
      const password = passwordInput.value;
      const confirmPassword = confirmPasswordInput.value;
      let valid = true;

      errorMessage.textContent = '';

      if (email !== email.toLowerCase()) {
        errorMessage.textContent = 'Please enter your email in lowercase.';
        valid = false;
      }

      if (dob >= today) {
        errorMessage.textContent = 'Date of birth must be before today.';
        valid = false;
      }

      const isUsernameAvailable = await checkUsernameAvailability(username);
      if (!isUsernameAvailable) {
        errorMessage.textContent = 'Username is already taken.';
        valid = false;
      }

      if (password !== confirmPassword) {
        errorMessage.textContent = 'Passwords do not match!';
        valid = false;
      }

      if (valid) {

        errorMessage.textContent = 'Form submitted successfully!';
      }
    });

    confirmPasswordInput.addEventListener('keyup', validatePassword);
  });
}());
