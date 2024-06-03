function date() {
  const now = new Date();
  const datetime = now.toLocaleString();
  document.querySelector('.todaysDate').innerHTML += ` ${datetime}`;
}
date();