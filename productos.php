<?php
    include 'config.php';

    session_start();
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
        header('location:login.php');
    }

    if(isset($_GET['logout'])){
        unset($user_id);
        session_destroy();
        header('location:login.php');
    }
?>
<?php include "products_body.php"?>
<?php
        if(isset($message)){
            foreach ($message as $message){
                echo '<div class="message" onclick= "this.remove();">'.$message. '</div>';
            }
        }
    ?>
    <div class="header-1">
        <div class="flex">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-whatsapp"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>
            <p><a href="login.php">Iniciar sesion</a> | <a href="registro.php">Registrarse</a></p>
        </div>
    </div>
    <section class="header-nav">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.jpg" alt="el campo">
             </a>
        </div>
        <div class="menu2" id="menu2">
            <h2>Menu</h2>
            <button class="menu-toggle" id="menu-toggle">&#9776;</button>
            <button class="close-btn2" id="close-btn2">&times;</button>
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="#"><i class="fa-solid fa-address-card"></i> Nosotros</a></li>
                <li><a href="productos.php"> <i class="fa-solid fa-shop"></i> Productos</a></li>
                <li>
                    <a href="#"> <i class="fa-solid fa-server"></i> Servicios</a>
                    <div class="dropdown-content" style="background-color: darkgreen;">
                        <a href="#" style="background-color: darkgreen;">Servicio 1</a>
                        <a href="#" style="background-color: darkgreen;">Servicio 2</a>
                        <a href="#" style="background-color: darkgreen;">Servicio 3</a>
                    </div>
                </li>
                <li><a href="contactos.php"><i class="fa-solid fa-address-book"></i> Contactos</a></li>
            </ul>
        </div>>
            <div id="menu-btn" class="fas fa-bars"></div>
            <nav class="navbar">
                <ul class = "menu">
                    <li class = "menu-item"><a href="index.php" class="navegacion__enlace">Agricultura</a>
                       <ul class="submenu" style="background-color: white;  list-style-type: none;">
                            <li><a href="">Biopreparados</a></li>
                            <li><a href="">manejo de suelo-sustrato</a></li>
                            <li><a href="">Compostaje</a></li>
                            <li><a href="">Cultivos</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="" class="navegacion__enlace">Salud</i></a>
                         <ul  class="submenu" style="background-color: white;  list-style-type: none;">
                            <li><a href="">Terapias Naturales</a></li>
                            <li><a href="">Bienestar Emocional</a></li>
                            <li><a href="">Medicina Preventiva</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="cursos.php" class="navegacion__enlace">Blogs</a>
                         <ul class="submenu" style="background-color: white;  list-style-type: none;">
                            <li><a href="">Videos</a></li>
                            <li><a href="">Otros</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="search">
                <span class="icon">
                    <i class="fa-solid fa-magnifying-glass" id="searchBtn"></i>
                    <!--<i class="fa-solid fa-xmark" id="closeBtn"></i>!-->
                </span>
            </div>
            <div class="sharp">
               <a href="add_productos.php"><i id ="shopping" class="fa-sharp fa-solid fa-cart-shopping"><span>(00)</span></i></a>
            </div>           
            <div class="icons">
                <div id="user-btn" class="fa-solid fa-user"></div>
            </div>
            <div class="user-profile">
                <?php
                    $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'")
                    or die('query failed');
                    if(mysqli_num_rows($select_user) > 0){
                        $fetch_user = mysqli_fetch_assoc($select_user);
                    };
                ?>
                <p>Username: <span><?php echo $fetch_user['nombre']; ?></span></p>
                <p>Email: <span><?php echo $fetch_user['email']; ?></span></p>
                <div class="flex">
                    <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Estas seguro de que quieres salir??')"  
                    class="delete-btn">Salir</a>
                </div>
            </div>
    </section>
    <section class="contenedor">
        <div class="swiper home-slider" autoplay>
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/img4.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img5.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img6.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img7.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img8.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="productos">
        <h1>Nuestros Productos</h1>
            <div class="grid">
                <div class="producto">
                    <a href="producto.php">
                        <img src="images/EGW.jpg" alt="Imagen del producto" class="producto_imagen">
                        <div class="producto_informacion">
                            <p class="producto_nombre">Camisetas</p>
                            <p class="producto_precio">€25</p>
                        </div>
                    </a>
                </div>
                <div class="producto">
                    <a href="producto.php">
                        <img src="images/EGW.jpg" alt="Imagen del producto" class="producto_imagen">
                        <div class="producto_informacion">
                            <p class="producto_nombre">Camisetas</p>
                            <p class="producto_precio">€25</p>
                        </div>
                    </a>
                </div>
                <div class="producto">
                    <a href="producto.php">
                        <img src="images/EGW.jpg" alt="Imagen del producto" class="producto_imagen">
                        <div class="producto_informacion">
                            <p class="producto_nombre">Camisetas</p>
                            <p class="producto_precio">€25</p>
                        </div>
                    </a>
                </div>
                <div class="producto">
                    <a href="producto.php">
                        <img src="images/EGW.jpg" alt="Imagen del producto" class="producto_imagen">
                        <div class="producto_informacion">
                            <p class="producto_nombre">Camisetas</p>
                            <p class="producto_precio">€25</p>
                        </div>
                    </a>
                </div>
                <div class="producto">
                    <a href="producto.php">
                        <img src="images/EGW.jpg" alt="Imagen del producto" class="producto_imagen">
                        <div class="producto_informacion">
                            <p class="producto_nombre">Camisetas</p>
                            <p class="producto_precio">€25</p>
                        </div>
                    </a>
                </div>
                <div class="producto">
                    <a href="producto.php">
                        <img src="images/EGW.jpg" alt="Imagen del producto" class="producto_imagen">
                        <div class="producto_informacion">
                            <p class="producto_nombre">Camisetas</p>
                            <p class="producto_precio">€25</p>
                        </div>
                    </a>
                </div>
            </div>
    </section>

    <section class="categoria-container">
        <div class="categoria-titulo">
            <h1>Nuestras Categorias</h1>
        </div>

        <div class="glider-contain">
            <div class="glider">
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/aitor.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Aitor Bastarrika</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/Diego.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Salinas Don Diego</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/rietvell.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Rietvell</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/ecomatalasser.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Ecomatalasser</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/Logo-N.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Herbes del Moli</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/massaxuxes.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Massaxuxes</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/natura.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Natura Premium</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/veggie.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Veggie Karma</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
                <div class="categoria-box">
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="">
                                <img src="images/labranza.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-box-text">
                        <div class="empresa-categoria">
                            <span>Aitor Bastarrika</span>
                        </div>

                        <a class="button" href="#">Mas Info</a>
                    </div>
                </div>  
            </div>

            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
        </div>



        
    </section>
    <?php include 'footer.php';?>
