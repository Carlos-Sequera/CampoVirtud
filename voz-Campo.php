<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>La Voz del Campo</title>
</head>
<body>
<?php
        if(isset($message)){
            foreach ($message as $message){
                echo '<div class="message" onclick= "this.remove();">'.$message. '</div>';
            }
        }
    ?>
    <div class="header-nav" style="padding: 3rem; padding-top: 3rem;">
        <div class="flex" style="display: flex; align-items: center; justify-content: space-evenly;" >
            <div class="logo">
                <a href="index.php" style="text-align:center;">
                    <img src="images/logo.jpg" alt="el campo" style="width:120%;">
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
                            <li><a href="">manejo de suelo-sustrato</a></li>
                            <li><a href="">Compostaje</a></li>
                            <li><a href="">Cultivos</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="" class="navegacion__enlace">salud</a>
                        <ul  class="submenu" style="background-color: white;">
                            <li><a href="">Terapias Naturales</a></li>
                            <li><a href="">Bienestar Emocional</a></li>
                            <li><a href="">Medicina Preventiva</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="cursos.php" class="navegacion__enlace">Talleres</a>
                        <ul class="submenu" style="background-color: white;">
                            <li><a href="">Videos</a></li>
                            <li><a href="">Otros</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="actualidad.php" class="navegacion__enlace">Actualidad</a></li>
                    <li class = "menu-item"><a href="registro.php" class="navegacion__enlace">Blog</a>
                        <ul class="submenu" style="background-color: white;">
                            <li><a href="voz-Campo.php">La Voz del Campo</a></li>
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
</body>
</html>