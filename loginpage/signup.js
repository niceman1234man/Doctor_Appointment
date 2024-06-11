const form = document.getElementById('form');
const username = document.getElementById('NIC');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmpassword = document.getElementById('password2'); // corrected variable name

form.addEventListener('submit', (e) => {
  e.preventDefault();

  // validateInputs();
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = message;
  inputControl.classList.add('error');
  inputControl.classList.remove('success');
};

const setSuccess = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
};

const isValidEmail = (email) => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

// const validateInputs = () => {
const usernameValue = username.value.trim();
const emailValue = email.value.trim();
const passwordValue = password.value.trim();
const confirmpasswordValue = confirmpassword.value.trim(); // corrected variable name

if (usernameValue === '') {
  setError(username, 'NIC is required'); // corrected variable name
} else {
  setSuccess(username);
}

if (emailValue === '') {
  setError(email, 'Email is required');
} else if (!isValidEmail(emailValue)) {
  setError(email, 'Provide a valid email address');
} else {
  setSuccess(email);
}

if (passwordValue === '') {
  setError(password, 'Password is required');
} else if (passwordValue.length < 8) {
  setError(password, 'Password must be at least 8 characters.');
} else {
  setSuccess(password);
}

if (confirmpasswordValue === '') {
  setError(confirmpassword, 'Please confirm your password'); // corrected variable name
} else if (confirmpasswordValue !== passwordValue) {
  setError(confirmpassword, "Password don't match"); // corrected variable name
} else {
  setSuccess(confirmpassword);
}
