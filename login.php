<?php
include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$password'") 
    or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:login.php');
    }else{
        $message[] = 'Incorrecto el usuario o la contraseña!!!';
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
    <title>Iniciar Sesion</title>
</head>
<body>
<?php
    if(isset($message)){
        foreach ($message as $message){
            echo '<div class="message">'.$message. '</div>';
        }
    }
    ?>
    <div class="header-nav">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.jpg" alt="el campo" style="width:40%;">
            </a>
        </div>
        <div class="icons" style="font-size: 2em;">
                <div id="user-btn" class="fa-solid fa-user"></div>
        </div>
    <!--    <nav class="navegacion">
            <input type="checkbox" name="" id="click">
            <label for="click" class="menu-btn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <ul>
                <li><a href="index.php" class="navegacion__enlace">Inicio</a></li>
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
                    <h3>Iniciar sesion Ahora</h3>
                    <input type="email" name="email" required placeholder="Ingresa tu email" class="box">
                    <input type="password" name="password" required placeholder="Ingresa tu contraseña" class="box">
                    <input type="submit" name="submit" class="btn" value="Iniciar Sesion ahora">
                    <p>Aun no tienes cuenta??, <a href="registro.php">Registrate ahora</a></p>
                </form>
            </div>
    </header>
</body>
</html>