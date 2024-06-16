// Your JavaScript code goes here
document.getElementById('add-new-button').onclick = () => {
  document.querySelector('.add-new-doctors-pop-up').classList.add('active');
};

// AJAX form submission
document.getElementById('add-button').addEventListener('click', (event) => {
  event.preventDefault(); // Prevent the default form submission

  
        document.querySelector('.add-new-doctors-pop-up').classList.remove('active');
      
       
document.querySelector('#x-sign').addEventListener('click', () => {
  document.querySelector('.add-new-doctors-pop-up').classList.remove('active');
});


document.querySelector('.view-button').addEventListener('click', () => {
  document.querySelector('.schedule-detail-pop-up').classList.add('active');
});












document.querySelector('#delete').onclick=function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this session?")) {
        // Submit the form to delete the session
        const form = document.createElement('form');
        form.method = 'post';
        form.action = 'delete_session.php';

        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'id';
        input.value = id;

        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
    }
}});
