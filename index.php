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
        <div class="swiper home-slider" autoplay>
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/img4.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/uvas.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/sol.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/cebolla.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/colibri.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/paisajes.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/topocho.jpg); background-repeat: no-repeat; height: 60rem; background-position: center;  background-size: cover;" >
                    <div class="content"></div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <main class="main_principal nav_contenedor " >
        <div class="sobre__nosotros" >
        <div class="sobre__nosotros-palabras">
                <h3>Historia y Mision</h3>
            </div>
            <div class="sobre__nosotros-informacion">
                <!--<p>Morbi elementum augue eget tortor tincidunt tristique. Aenean non massa vel nisi euismod facilisis in id orci. 
                    Sed tincidunt erat nulla, ullamcorper cursus nulla ullamcorper ut. Praesent aliquam vestibulum dolor, vitae 
                    dignissim ipsum bibendum vel. Sed pellentesque ipsum in lorem lacinia, in pharetra dolor pharetra. Sed commodo 
                    tincidunt orci eget mollis. Praesent bibendum ante feugiat imperdiet aliquet. Quisque vulputate scelerisque 
                    elit, at semper turpis. Quisque lobortis sem metus.</p>-->
                    <p>En el año 2005, Carlos Sequera, CEO de Campo Virtud, experimentó un profundo despertar espiritual 
                    que transformó su vida. Este momento marcó el inicio de un viaje hacia la verdad y el propósito, caracterizado por tres eventos 
                    significativos: el inicio de una maestría en investigación, el fin de una relación sentimental y el comienzo de una vida guiada 
                    por sus creencias.</p><br>

                    <p>A lo largo de su desarrollo profesional, Carlos ha fusionado su pasión por la agronomía y la docencia con un firme proposito por 
                    el bienestar de los demás, cultivando así el deseo de compartir los beneficios de la vida en el campo.</p><br>

                    <p> Por otra parte, en el año 2018, Carlos Sequera Jr. se unió al viaje de Campo Virtud, impulsado por su profundo arraigo a la verdad y la inspiración recibida 
                    de su familia desde la infancia, después de tomar la decisión de emigrar a España, se dedica actualmente a la programación y al desarrollo 
                    informático. Este cambio marcó el inicio de una colaboración única entre padre e hijo, culminando en la creación y desarrollo de esta página web.</p><br>
            </div>
            <div class="sobre__nosotros-palabras">
                <h3>Propositos</h3>
            </div>
            <div class="sobre__nosotros-informacion">
                    <ol>                        
                        <li>Proporcionar información veráz, sencilla y cualificada en Agricultura ecológica, medicina natural y vida en el campo.<!--detallada y educativa sobre los 8 remedios naturales y cómo aplicarlos en la vida diaria.--></li>
                        <li>Ofrecer productos y recursos relacionados con la vida en el campo, incluyendo alimentos saludables, productos naturales y herramientas para el bienestar físico y espiritual.</li>
                        <li>Promover la conciencia sobre los beneficios de vivir en el campo, en el marco de un estilo de vida saludable y natural.</li>
                        <li>Crear una comunidad en línea que comparta experiencias, consejos y testimonios sobre la vida en el campo y sus beneficios</li>
                    </ol>
            </div>
            <div class="sobre__nosotros-palabras">
                <h3>Vision</h3>
            </div>
            <div class="sobre__nosotros-informacion">
                <p>Nuestra visión es ser un recurso en línea para las personas que quieren salir de las ciudades y buscan adoptar un enfoque integral a su bienestar. Queremos proporcionar una plataforma 
                    confiable que combina conocimientos prácticos sobre el estilo de vida rural con principios de salud y espirituales. A medida que crecemos, aspiramos a construir 
                    una comunidad activa y comprometida, en la que los miembros puedan compartir sus experiencias, aprender unos de otros y encontrar inspiración para llevar una vida abundante.</p>
            </div>
        </div><br><br><br>
    </main>
    <?php include 'footer.php';?>
