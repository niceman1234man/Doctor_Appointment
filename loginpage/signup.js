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

function validateForm() {
  const fname = document.getElementsByName('fname')[0].value;
  const lname = document.getElementsByName('lname')[0].value;
  const address = document.getElementsByName('address')[0].value;
  const nic = document.getElementsByName('nic')[0].value;
  const dob = document.getElementsByName('dob')[0].value;

  if (fname === '' || lname === '' || address === '' || nic === '' || dob === '') {
    // alert('Please fill in all required fields!');
    return false;
  }
  // If all fields are filled, allow the user to proceed
  // You can add additional logic here, such as submitting the form or navigating to the next page
  // alert('Form is valid! Proceeding to next step...');
  return true;
}
validateForm();
