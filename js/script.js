let navbar = document.querySelector('.header .flex .navbar');
let userBox = document.querySelector('.account-box');

console.log(document.querySelector('#menu-btn'))


document.querySelector('#menu-btn').onclick = () =>{
   console.log("Clicked")
   userBox.classList.add('active');
}

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.remove('active'); 
   
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   userBox.classList.remove('active');
}