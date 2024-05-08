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
<?php include 'body.php'; ?>
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
        </div>
            <div id="menu-btn" class="fas fa-bars"></div>
            <nav class="navbar">
                <ul class = "menu">
                    <li class = "menu-item"><a href="index.php" class="navegacion__enlace">Agricultura</i> </a>
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
        <div class="swiper home-slider">
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

    <section class="main">
        <div class="titulo">
            <h1>Productos añadidos</h1>
        </div>
        <section class="shopping-cart">
            <div class="box-container">
                <div class="box">
                    <img src="images/EGW.jpg" alt="productos añadidos">
                    <div class="nombre">Camisetas</div>
                    <div class="precio">$25</div>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="1">
                        <input type="number" min="1" max="20" value="1">
                        <br>
                        <input type="submit" value="actualizar" class="option-btn">
                        <input type="submit" value="eliminar" class="option-btn">
                    </form>
                </div>
                <div class="box">
                    <img src="images/EGW.jpg" alt="productos añadidos">
                    <div class="nombre">Camisetas</div>
                    <div class="precio">$25</div>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="1">
                        <input type="number" min="1" max="20" value="1">
                        <br>
                        <input type="submit" value="actualizar" class="option-btn">
                        <input type="submit" value="eliminar" class="option-btn">
                    </form>
                </div>
                <div class="box">
                    <img src="images/EGW.jpg" alt="productos añadidos">
                    <div class="nombre">Camisetas</div>
                    <div class="precio">$25</div>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="1">
                        <input type="number" min="1" max="20" value="1">
                        <br>
                        <input type="submit" value="actualizar" class="option-btn">
                        <input type="submit" value="eliminar" class="option-btn">
                    </form>
                </div>
                <div class="box">
                    <img src="images/EGW.jpg" alt="productos añadidos">
                    <div class="nombre">Camisetas</div>
                    <div class="precio">$25</div>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="1">
                        <input type="number" min="1" max="20" value="1">
                        <br>
                        <input type="submit" value="actualizar" class="option-btn">
                        <input type="submit" value="eliminar" class="option-btn">
                    </form>
                </div>
                <div class="box">
                    <img src="images/EGW.jpg" alt="productos añadidos">
                    <div class="nombre">Camisetas</div>
                    <div class="precio">$25</div>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="1">
                        <input type="number" min="1" max="20" value="1">
                        <br>
                        <input type="submit" value="actualizar" class="option-btn">
                        <input type="submit" value="eliminar" class="option-btn">
                    </form>
                </div>
                <div class="box">
                    <img src="images/EGW.jpg" alt="productos añadidos">
                    <div class="nombre">Camisetas</div>
                    <div class="precio">$25</div>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="1">
                        <input type="number" min="1" max="20" value="1">
                        <br>
                        <input type="submit" value="actualizar" class="option-btn">
                        <input type="submit" value="eliminar" class="option-btn">
                    </form>
                </div>
            </div>
            <div style="margin-top: 2rem; text-align:center">
                <a href="producto.php" class="delete-btn" style="font-size: 2rem;">Eliminar todo</a>
            </div>
            <div class="cart-total">
                <p>Precio Total: <span>&euro;354</span></p>
                <div class="flex">
                    <a href="#" class="option-btn" >Continuar con la compra</a>
                    <a href="#" class="btn">Pasar por la caja</a>
                </div>
            </div>
        </section>
    </section>
    <?php include 'footer.php';?>
