function validateDate() {
  const dobInput = document.getElementById('dob');
  const dobError = document.getElementById('dob-error');

  if (!dobInput || !dobError) {
    // Check if elements are found
    return false;
  }

  const dob = new Date(dobInput.value);
  const today = new Date().setHours(0, 0, 0, 0);

  if (dob >= today) {
    dobError.textContent = 'The date of birth must be a past date.';
    return false;
  }

  dobError.textContent = ''; // Clear any previous error message
  return true;
}

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('account-details-form');

  if (form) {
    form.addEventListener('submit', (event) => {
      if (!validateDate()) {
        event.preventDefault(); // Prevent form submission if validation fails
      }
    });
  }
});
