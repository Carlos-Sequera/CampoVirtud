let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header-nav .navbar');
let accountBox = document.querySelector('.header-nav .user-profile');

document.querySelector('#user-btn').onclick = () => {
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}
window.onscroll = () => {
    navbar.classList.remove('active');
    accountBox.classList.remove('active');
}
menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

}

let slider = new Swiper(".home-slider", {
    loop: true,
    autoplay: {
        delay: 3000, // Autoplay delay in milliseconds (3000 ms = 3 seconds)
        disableOnInteraction: false, // Keep autoplaying when user interacts with the slider
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
});

let swiper = new Swiper(".card_slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

new Glider(document.querySelector('.glider'), {
    slidesToScroll: 1,
    slidesToShow: 5.5,
    draggable: true,
    dots: '.dots',
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    }
});
