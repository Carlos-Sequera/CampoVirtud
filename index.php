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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/CampoVirtud/assets/css/normalize.css">
    
    <link rel="stylesheet" href="/CampoVirtud/assets/css/style.css?v=<%=DateTime.Now%>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Campo Virtud</title>
    <style>
        @media (min-width: 900px) {
            .header-nav .flex .navegacion .menu{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php
        if(isset($message)){
            foreach ($message as $message){
                echo '<div class="message" onclick= "this.remove();">'.$message. '</div>';
            }
        }
    ?>
    <div class="header-nav">
        <div class="flex">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.jpg" alt="el campo">
                </a>
            </div>
            <nav class="navegacion">
                <input type="checkbox" name="" id="click">
                <label for="click" class="menu-btn">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </label>
                <ul class = "menu">
                    <li class = "menu-item"><a href="index.php" class="navegacion__enlace">Agricultura</a>
                       <ul class="submenu" style="background-color: white;">
                            <li><a href="">Biopreparados</a></li>
                            <li><a href="">mapa de suelo gustado</a></li>
                            <li><a href="">Compesteje</a></li>
                            <li><a href="">Cultivos</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="" class="navegacion__enlace">salud</a>
                        <ul  class="submenu" style="background-color: white;">
                            <li><a href="">Terapias Naturales</a></li>
                            <li><a href="">Bienestar Emocional</a></li>
                            <li><a href="">Medicina Productiva</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="cursos.php" class="navegacion__enlace">Talleres</a>
                        <ul class="submenu" style="background-color: white;">
                            <li><a href="">Videos</a></li>
                            <li><a href="">Otros</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="" class="navegacion__enlace">Actualidad</a></li>
                    <li class = "menu-item"><a href="registro.php" class="navegacion__enlace">Blog</a>
                        <ul class="submenu" style="background-color: white;">
                            <li><a href="">La Voz del Campo</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
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
                    <a href="login.php" class="btn">Inicio</a>
                    <a href="registro.php" class="option-btn">Registro</a>
                    <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Estas seguro de que quieres salir??')"  
                    class="delete-btn">Salir</a>
            </div>
        </div>
    </div>
</div>
    <div class="header" style="min-height: 80vh; background:url(images/img.jpg); background-repeat: no-repeat; background-size: cover; background-position: center right;
            display: flex; align-items: center;">
        <div class="contenedor">
            <div class="header__texto">
                <h2 class="no-margin">Por Que se Muere Tu Huerto Y Como Evitarlo</h2>
                <p class="no-margin">No necesitas ningún superpoder para no matar a tus plantas, solo te hace falta la información adecuada.</p>
            </div>
            </div>
        </div>
    </div>
    <main class="main_principal nav_contenedor ">
        <div class="sobre__nosotros">
            <div class="sobre__nosotros-palabras">
                <h3>Objetivos</h3>
            </div>
            <div class="sobre__nosotros-informacion">
                <!--<p>Morbi elementum augue eget tortor tincidunt tristique. Aenean non massa vel nisi euismod facilisis in id orci. 
                    Sed tincidunt erat nulla, ullamcorper cursus nulla ullamcorper ut. Praesent aliquam vestibulum dolor, vitae 
                    dignissim ipsum bibendum vel. Sed pellentesque ipsum in lorem lacinia, in pharetra dolor pharetra. Sed commodo 
                    tincidunt orci eget mollis. Praesent bibendum ante feugiat imperdiet aliquet. Quisque vulputate scelerisque 
                    elit, at semper turpis. Quisque lobortis sem metus.</p>-->
                    <ol>
                        <li>Promover la conciencia sobre los beneficios de vivir en el campo y fomentar un estilo de vida saludable y natural.</li>
                        <li>Proporcionar información detallada y educativa sobre los 8 remedios naturales y cómo aplicarlos en la vida diaria.</li>
                        <li>Ofrecer productos y recursos relacionados con la vida en el campo, incluyendo alimentos saludables, productos naturales y herramientas para el bienestar físico y espiritual.</li>
                        <li>Crear una comunidad en línea que comparta experiencias, consejos y testimonios sobre la vida en el campo y los beneficios de los remedios naturales.</li>
                        <li>Brindar apoyo y orientación a los visitantes interesados en hacer cambios positivos en su estilo de vida y mejorar su bienestar integral.</li>
                    </ol>
            </div>
            <div class="sobre__nosotros-palabras">
                <h3>Mision</h3>
            </div>
            <div class="sobre__nosotros-informacion">
                <p>Nuestra misión es inspirar y guiar a las personas hacia una vida saludable y armoniosa en el campo, basada en los principios de los 8 remedios naturales. A través de nuestro sitio web, 
                    buscamos proporcionar información confiable y accesible que promueva la conciencia sobre los beneficios de vivir en el campo y los remedios naturales como una forma de mejorar la calidad 
                    de vida física, mental y espiritual. Nos esforzamos por ser una fuente de inspiración y apoyo para aquellos que desean llevar un estilo de vida más natural y equilibrado.</p>
            </div>
            <div class="sobre__nosotros-palabras">
                <h3>Vision</h3>
            </div>
            <div class="sobre__nosotros-informacion">
                <p>Nuestra visión es ser un referente en línea para las personas que buscan vivir en el campo y adoptar un enfoque holístico hacia su bienestar. Queremos ser reconocidos como una plataforma 
                    confiable y comprensiva que combina conocimientos prácticos sobre el estilo de vida rural con principios espirituales y los 8 remedios naturales. A medida que crecemos, aspiramos a construir 
                    una comunidad activa y comprometida, en la que los miembros puedan compartir experiencias, aprender unos de otros y encontrar inspiración para llevar una vida más saludable y significativa.</p>
            </div>
        </div>
    </main>
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
        <p>Copyrigth &copy;2023; Designed by <span class="designer">Carlos Sequera</span></p>
    </div>
    <script src="js/script.js"></script>
</body>
</html>