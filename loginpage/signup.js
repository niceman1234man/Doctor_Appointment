
document.addEventListener('DOMContentLoaded', () => {
  const nextButton = document.getElementById('next-button');
  if (nextButton) {
    nextButton.addEventListener('click', (event) => {
      event.preventDefault();
      window.location.href = 'signup2.html';
    });
  }

  const backButton = document.getElementById('back-button');
  if (backButton) {
    backButton.addEventListener('click', (event) => {
      event.preventDefault();
      window.location.href = 'signup.html';
    });
  }
});
function validateForm() {
  var fname = document.getElementsByName("fname")[0].value;
  var lname = document.getElementsByName("lname")[0].value;
  var address = document.getElementsByName("address")[0].value;
  var nic = document.getElementsByName("nic")[0].value;
  var dob = document.getElementsByName("dob")[0].value;

  if (fname === "" || lname === "" || address === "" || nic === "" || dob === "") {
    alert("Please fill in all required fields!");
    return false;
  } else {
    // If all fields are filled, allow the user to proceed
    // You can add additional logic here, such as submitting the form or navigating to the next page
    alert("Form is valid! Proceeding to next step...");
    return true;
  }
}