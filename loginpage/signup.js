// script.js

document.addEventListener('DOMContentLoaded', () => {
  const nextButton = document.getElementById('next-button');

  if (nextButton) {
    nextButton.addEventListener('click', (event) => {
      event.preventDefault();
      window.location.href = 'signup2.html'; // Redirect to account details page
    });
  }
});
