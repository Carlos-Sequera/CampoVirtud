let accountBox = document.querySelector('.header-nav .user-profile');
document.querySelector('#user-btn').onclick = () => {
    accountBox.classList.toggle('active');
}

let menuItem = document.querySelector('menu-item');

menuItem.addEventListener('hover', showMenu)

const showMenu = ()=> {
    
}