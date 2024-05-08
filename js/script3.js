// script.js
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const closeBtn2 = document.getElementById('close-btn2');
    const menu2 = document.getElementById('menu2');
    
    menuToggle.addEventListener('click', function() {
        menu2.classList.add('active');
    });
    
    closeBtn2.addEventListener('click', function() {
        menu2.classList.remove('active');
    });
});
