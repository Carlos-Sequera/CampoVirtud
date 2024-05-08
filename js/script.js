let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header-nav .user-profile');

document.querySelector('#user-btn').onclick = () => {
    accountBox.classList.toggle('active');
}

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    accountBox.classList.remove('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
    accountBox.classList.toggle('active');
}

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

let menuItem = document.querySelector('menu-item');

menuItem.addEventListener('hover', showMenu)

const showMenu = ()=> {
    
}