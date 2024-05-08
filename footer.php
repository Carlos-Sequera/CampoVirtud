<footer class="footer">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>            
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Proyectos</a></li>
                <li><a href="">Cursos</a></li>
                <li><a href="">Nosotros</a></li>
                <li><a href="">Contactos</a></li>
                <li><a href="">Registrate/Inicio</a></li>
            </ul>
        </div>
    </footer>
    <div class="footerBottom">
        <p>Copyrigth &copy;<?php echo date('Y');?> Designed by <span class="designer">Carlos Sequera</span></p>
    </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
   <script src="js/script2.js"></script>
   <script src="js/script3.js"></script>
   <script src="js/glider.min.js"></script>
   <script>
        new Glider(document.querySelector('.glider'), {
            slidesToScroll: 1,
            slidesToShow: 4,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>
   <script>
    let searchBtn = document.querySelector('#searchBtn');
    let closeBtn = document.querySelector('#closeBtn');
    let searchBox = document.querySelector('.searchBox');

    closeBtn.onclick = function(){
        searchBox.classList.remove('active');
    }
    searchBtn.onclick = function(){
        searchBox.classList.add('active');
    }
   </script>
</body>
</html>