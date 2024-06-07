function date() {
  const now = new Date();
  const day = now.getDay();
  const month = now.getMonth();
  const year = now.getFullYear();

  document.querySelector('.todaysDate').innerHTML += ` ${day}/${month}/${year}`;
}
date();