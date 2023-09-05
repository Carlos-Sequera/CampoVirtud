<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$password'") 
    or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'el usuario ya existe!!!';
    }else{
        mysqli_query($conn, "INSERT INTO `user_form` (nombre, email, password) VALUES('$name', '$email', '$password')") 
        or die('query failed');
        $message[] = 'registrado exitosamente';
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registro</title>
</head>
<body>
    <?php
    if(isset($message)){
        foreach ($message as $message){
            echo '<div class="message" onclick= "this.remove();">'.$message.'</div>';
        }
    }
    ?>
    <div class="header-nav">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.jpg" alt="el campo">
            </a>
        </div>
        <!--<nav class="navegacion">
        <input type="checkbox" name="" id="click">
                <label for="click" class="menu-btn">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </label>
           <ul>
                <li><a href="" class="navegacion__enlace">Inicio</a></li>
                <li><a href="" class="navegacion__enlace">Proyectos</a></li>
                <li><a href="" class="navegacion__enlace">Cursos</a></li>
                <li><a href="" class="navegacion__enlace">Nosotros</a></li>
                <li><a href="" class="navegacion__enlace">Contactos</a></li>
                <li><a href="registro.php" class="navegacion__enlace">Registrate/Inicio</a></li>
            </ul>
        </nav>-->
    </div>
    <header class="header" style="min-height: 80vh; background:url(images/img.jpg); background-repeat: no-repeat; background-size: cover; background-position: center right;">
            <div class="form-container">
                <form action="" method="post">
                    <h3>Registrate Ahora</h3>
                    <input type="text" name="name" required placeholder="Ingresa tu nombre" class="box">
                    <input type="email" name="email" required placeholder="Ingresa tu email" class="box">
                    <input type="password" name="password" required placeholder="Ingresa tu contraseña" class="box">
                    <input type="password" name="cpassword" required placeholder="Confirma tu contraseña" class="box">
                    <input type="submit" name="submit" class="btn" value="Registrate ahora">
                    <p>Ya tienes cuenta??, <a href="login.php">Iniciar sesion</a></p>
                </form>
            </div>
    </header>
</body>
</html>