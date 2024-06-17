(function name() {
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('account-details-form');
    const emailInput = document.getElementById('email');
    const dobInput = document.getElementById('dob');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.querySelector('input[name="password"]');
    const confirmPasswordInput = document.querySelector('input[name="confirmPassword"]');
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
      // Simulate an asynchronous check (replace with actual API call)
      return new Promise((resolve) => {
        setTimeout(() => {
          const takenUsernames = ['admin', 'user', 'test']; // Example list of taken usernames
          resolve(!takenUsernames.includes(username));
        }, 500); // Simulate delay for demonstration (replace with actual API call)
      });
    }

    form.addEventListener('submit', async (event) => {
      event.preventDefault(); // Prevent the default form submission

      const email = emailInput.value.trim(); // Trim whitespace
      const dob = new Date(dobInput.value);
      const today = new Date();
      const username = usernameInput.value.trim();
      const password = passwordInput.value;
      const confirmPassword = confirmPasswordInput.value;
      let valid = true;

      errorMessage.textContent = ''; // Clear any previous error message

      if (email !== email.toLowerCase()) {
        errorMessage.textContent = 'Please enter your email in lowercase.';
        valid = false;
      }

      if (dob >= today) {
        errorMessage.textContent = 'Date of birth must be before today.';
        valid = false;
      }

      // Check username availability
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
        // Uncomment the line below for actual form submission
        // form.submit();
      }
    });

    confirmPasswordInput.addEventListener('keyup', validatePassword);
  });
}());
