document.querySelector('#add-new-button').addEventListener("click",function(){
    document.querySelector(".add-new-doctors-pop-up").classList.add('active');
});
document.querySelector('#x-sign').addEventListener("click",function(){
    document.querySelector(".add-new-doctors-pop-up").classList.remove('active');
});
const date=new Date();
const day=date.getDate();
const month=date.getMonth();
const year=date.getFullYear();
const datee=document.getElementById('today-date').append(`${day}/${month}/${year}`);
//document.querySelector('#today-date').appendChild(datee);
