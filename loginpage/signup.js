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
