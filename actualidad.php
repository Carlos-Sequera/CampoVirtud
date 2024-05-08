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
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/CampoVirtud/assets/css/normalize.css">
    <link rel="stylesheet" href="http://localhost/CampoVirtud/assets/css/style2.css?v=<%=DateTime.Now%>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <style>
        :root{
        --blanco: #FFF;
        --negro: #000;
        --verde: green;
        --fuenteParrafo: 'Proza Libre', sans-serif;
        --fuenteFooter:  'Times New Roman', Times, serif; 
        --fuentesecundaria:'Staatliches', cursive;
        --boxShadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }   

        html{
            font-size: 62.5%;
            overflow-x: hidden;
        }       

section{
    padding: 3rem 2rem;
}

html::-webkit-scrollbar{
    width: 1rem;
}

html::-webkit-scrollbar-track{
    background-color: var(--colorBlanco);
}

html::-webkit-scrollbar-thumb{
    background-color: var(--colorBlanco);
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}

body{
    font-family: "Rubik", sans-serif;
}

.header-nav{
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100px;
    background-color: var(--blanco);
    box-shadow: var(--box-shadow);
    z-index: 1000;
    /* .header .flex{ */
    display: flex;
    align-items: center;
    padding: 2rem;
    justify-content: space-between;
    max-width: 120rem;
}

.navbar{
    font-family: 'Proza Libre', sans-serif;
    color: var(--negro);
}

.navbar .menu{
    display: flex;
    text-decoration: none;
    list-style-type: none;

}

.navbar ul li{
    position: relative;
    float: left;
}
.navbar ul li a{
    display: block;
     margin: 0 1rem;
    font-size: 1.7rem;
    text-decoration: none;
    gap: 2rem;
    transition: all 0.3s;
    letter-spacing: 0.2em;
}
.navbar ul li a:hover{
    color: green;
}

.header-nav .icons div{
    margin-left: 1rem;
    font-size: 2rem;
    cursor: pointer;
    color: black;
}

.header-nav .icons div:hover{
    color: green;
}

.navbar ul li .submenu{
    position: absolute;
    left: 0;
    top:-400rem;
    margin-top: -40px;
    width: 250px;
    display: flex;
    transform: scale(0);
    flex-direction: column;
    transition: all 500ms ease-in-out;
    background-color: #FFF;
}

.navbar ul li .submenu li a{
    color: black;
    padding: 12px 18px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.navbar ul li .submenu li a:hover{
    color: green;
}

.navbar .menu .menu-item:hover .submenu{
    background-color: var(--blanco);
}

.navbar .menu .menu-item:hover ul {
    display: flex;
    transform: scale(1);
    top: 100px;
}

/* .nabvar ul li:hover .dropdown-menu .submenu{
    width: 150px;
    padding: 10px;
} */

.navbar ul li a .submenu li{
    width: 100%;
    border-top: 1px  solid rgb(0, 0, 0, .1);
}

.header-nav .navbar ul li:hover > ul{
    display: initial;
}

.navegacion__enlace{
    display: block;
    text-align: center;
    color: var(--negro);
    font-size: 1.8rem;
    padding-right: 16px;
    gap: 3rem;

}
.contenedor{
  background-image: url(../images/img4.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}

.main{
    padding: 3rem;
}

.main .cards{
    width: 85%;
    display: grid;
    gap: 3rem;
    grid-template-columns: repeat(3,1fr);
    margin: auto;
    align-items: stretch;
}

.cards .card{
    max-width: 40rem;
    display: flex;
    flex-direction: column;
    margin: 0 auto;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    overflow: hidden;
}

.card img{
    width: 100%;
    height:auto;
}
.text{
    font-size: 18px;
    padding: 20px;
    text-align: left;
}
.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.posted-date{
    font-family: sans-serif;
} 

.posted-date p {
    font-weight: 600;
    display: inline-block;
    padding: 15px 30px;
    color: grey;
    font-size: 1.8rem;
    text-align: center;
}
.footer{
    background-color: rgba(0, 0, 0, 0.922);
    color: white;
    width: 100%;;
    padding: 70px 30px 20px;
    font-family: var(--fuenteFooter);
  }

.footer a{
    color: var(--blanco);
}

.footer ul{
    list-style: none;
}

.socialIcons{
    display: flex;
    justify-content: center;
}

.socialIcons a{
    text-decoration: none;
    padding: 6px;
    margin: 10px;
    border-radius: 50%;
}

.socialIcons a i{
    font-size: 2.2em;
    color: var(--negro);
    background-color: var(--blanco);
    border-radius: 50%;
    opacity: 0.9;
    padding: 10px;
    margin: 5px;
}

.footerNav{
    margin: 30px 0;
}

.footerNav ul{
    display: flex;
    justify-content: center;
}

.footerNav ul li a{
    margin: 35px;
    font-size: 2rem;
    opacity: 0.7s;
    transition: 0.5s;
}

@keyframes fadeIn {
    0%{
        transform: translateY(1rem);
        opacity: .2s;
    }
}

.footerNav ul li a:hover{
    opacity: 1;
    background-color: var(--blanco);
    color: var(--negro);
    padding: 15px;
    border-radius: 12px;
    margin: 30px;
}
.socialIcons a:hover i:hover{
    background-color: rgba(0, 0, 0, 0.922);
    color: var(--blanco);
}

.footerBottom{
    background-color: black;
    color: var(--blanco);
    padding: 20px;
    text-align: center;
    font-family: var(--fuenteFooter);
} 
.main h1{
    text-align: center;
    font-size: 38px;
    font-family: sans-serif;
}
 .header-nav .user-profile{
    font-family: 'Proza Libre', sans-serif;
    position: absolute;
    top: 120%;
    right: 2rem;
    width: 30rem;
    border-radius: .5rem;
    border: 1px solid var(--negro);
    padding: 2rem;
    text-align: center;
    background-color: var(--blanco);
    display: none;
    animation: fadeIn .2s linear;
}

.header-nav .user-profile.active{
    display: inline-block;
}
.header-nav .user-profile:hover{
    display: initial;
}

.header-nav .user-profile p{
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
    color: var(--negro);
}

.header-nav .user-profile p span{
    color: rgb(38, 128, 0);;
}
.header-nav .user-profile .flex{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 5px;
    align-items: flex-end;
}
.btn,.option-btn,.delete-btn {
    display: inline-block;
    padding: 10px 18px;
    cursor: pointer;
    font-size: 1rem;
    background-color: rgb(38, 128, 0);
    color: var(--blanco);
    border: none;
    border-radius: 5px;
}
.header .user-profile.active{
    display: inline-block;
}
.btn:hover, .option-btn:hover, .delete-btn:hover{
    background-color: rgba(34, 128, 0, 0.788);
}
#menu-btn {
    font-size: 2.3rem;
    cursor: pointer;
    color: black;
    display: none;
}

/* .navbar .menu-btn i {
   color: var(--negro);
   font-size: 22px;
   cursor: pointer;
   display: none;
} */

.search{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5rem;
    z-index: 10;
    cursor: pointer;
}
.searchBox{
    position: absolute;
    right: -100%;
    width: 100%;
    height: 100%;
    display: flex;
    background: #fff;
    align-items: center;
    padding: 0 30px;
    transition: 0.5s  ease-in-out;
}
.searchBox.active{
    right: 0;
}
.searchBox input{
    width: 100%;
    border: none;
    outline: none;
    height: 70px;
    font-size: 2rem;
    background: #fff;
    border-bottom: 1px solid rgb(0,0,0,0,0.5);
}

.contenedor{
    padding: 0;
}

.contenedor .slide {
    text-align: center;
    padding: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover !important;
    background-position: cover !important;
}

.contenedor .swiper-slide-active .content{
    display: inline-block;
}

.footerBottom{
    background-color: black;
    color: var(--blanco);
    padding: 20px;
    text-align: center;
    font-family: var(--fuenteFooter);
    font-size: 1.5rem;
}

.designer{
    opacity: 0.7;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    margin: 0px 5px;
    color: var(--blanco);
}

@media (max-width: 991px) {
    html{
        font-size: 55%;
    }
}

@media (max-width: 768px) {
    .header-nav .navbar{
        position: absolute;
        top: 99%; left: 0; right: 0;
        background-color: #fff;
        border-top: 1px  solid rgb(0, 0, 0, .1);
        padding: 2rem;
        clip-path: polygon(0 0, 100% 0, 100% 0,0 0);
        display: flex;
        flex-direction: column;
        transition: .2s linear;
        text-align: center;
        height: 40rem;
    }
    .header-nav .navbar ul{
        display: flex;
        flex-direction: column;
    }
    #menu-btn {
        display: block;
        transition: .2s linear;
    }
    #menu-btn.fa-times{
        transform: rotate(180deg);
    }
    .header-nav .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
    .header-nav .navbar a{
        display: block;
        margin: 2rem;
        text-align: center;
   }
    .navbar ul li .submenu{
        float: right;
        margin: 0 auto;
        margin-top: -9rem;
        display: flex;
        flex-direction: row;
        background: #FFF;
   }
   .navbar ul li .submenu li{
        background-color: #FFF;
   }
   .navbar ul li .submenu li a{
        font-size: 1.2rem;
   }
   .footerNav ul{
    flex-direction: column;
  }
  .footerNav ul li{
    width: 100%;
    text-align: center;
    margin: 10px;
  }

  .main .cards{
    width: 100%;
    display: grid;
    gap: 2rem;
    grid-template-columns: repeat(2,auto);
    margin: auto;
    align-items: stretch;
}

}

@media (max-width: 450px) {
    html{
        font-size: 50%;
    }
    .main .cards{
    width: 100%;
    display: grid;
    gap: 2rem;
    grid-template-columns: repeat(1,auto);
    margin: auto;
    align-items: stretch;
    }
}

.home-slider .swiper-button-next,
.home-slider .swiper-button-prev{
    top: inherit;
    left: inherit;
    bottom: 0;
    right: 0;
    height: 7rem;
    width: 7rem;
    background: #FFF;
    color: #000;
}

.home-slider .swiper-button-next:hover,
.home-slider .swiper-button-prev:hover{
    background: green;
    color: var(--blanco);
}

.home-slider .swiper-button-next::after,
.home-slider .swiper-button-prev::after{
    font-size: 2rem;
}

.home-slider .swiper-button-prev{
    right: 7rem;
}

#shopping{
    font-size: 2.2rem;
    cursor: pointer;
    color: black;
}
 .header-1 {
    background-color: rgba(249, 243, 243, 0.929);
}
.header-1 .flex{
    padding: 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    width: 100%;
    height: 60px;
}
.header-1 .flex p{
    font-size: 1.7rem;
    font-family: var(--fuenteParrafo);
}
.header-1 .flex p a{
    color: darkgreen;
}
.header-1 .flex .share a{
    font-size: 1.8rem;
    color: #000;
    padding: 1.2rem 1.2rem;
}

@media(min-width: 768px) {
    .navbar{
      display: flex;
      gap: 1rem;
    }
  }

@media only screen and (max-width: 900px) {
    .logo img{
        width: 30%;
        height: 30%;
    }
    /* .navbar .menu-btn i {
        display: block;
     } */
    /* .navbar ul{
       position: fixed;
       top: 80px;
       left: -100%;
       background: var(--blanco);
       height: 100vh;
       width: 100%;
       display: block;
       text-align: center;
       transition: all 0.3s ease;
    }
    .navbar ul li{
        margin: 40px 0;
    }
    .navbar ul li a{
        font-size: 20px;
        display: block;
    }

    .navbar ul li a:hover{
        color:rgb(38, 128, 0);
        background: none;
    }
   
    .navegacion__enlace{
        color: var(--negro);
    }

     .navbar .fa-solid .fa-user{
        display: inline-block;
    } */
 }
    </style>  
    <title>Noticias</title>
</head>
<body>
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
                    <img src="images/logo.jpg" alt="el campo" style="width:70%;">
                 </a>
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
                    <li class = "menu-item"><a href="cursos.php" class="navegacion__enlace">Talleres</a>
                        <ul class="submenu" style="background-color: white;  list-style-type: none;">
                            <li><a href="">Videos</a></li>
                            <li><a href="">Otros</a></li>
                        </ul>
                    </li>
                    <li class = "menu-item"><a href="actualidad.php" class="navegacion__enlace">Actualidad</a></li>
                    <li class = "menu-item"><a href="registro.php" class="navegacion__enlace">Blog</a>
                        <ul class="submenu" style="background-color: white;  list-style-type: none;">
                            <li><a href="">La Voz del Campo</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="search">
                <span class="icon">
                    <i class="fa-solid fa-magnifying-glass" id="searchBtn"></i>
                    <i class="fa-solid fa-xmark" id="closeBtn"></i>
                </span>
            </div>
            <div class="sharp">
               <a href="productos.php"><i id ="shopping" class="fa-sharp fa-solid fa-cart-shopping"><span>(0)</span></i></a>
            </div>           
            <div class="searchBox">
                <input type="text" placeholder="Busca aqui...">
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
                    <a href="login.php" class="btn">Inicio</a>
                    <a href="registro.php" class="option-btn">Registro</a>
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
        <h1>Blog And News</h1>
        <div class="cards">
            <div class="card">
                <img src="images/img2.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
                
            </div>
            <div class="card">
                <img src="images/img3.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
                
            </div>
            <div class="card">
                <img src="images/img4.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
                
            </div>
            <div class="card">
                <img src="images/img5.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
                
            </div>
            <div class="card">
                <img src="images/img6.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
                
            </div>
            <div class="card">
                <img src="images/img7.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
            </div>
            <div class="card">
                <img src="images/img8.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
            </div>
            <div class="card">
                <img src="images/img9.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
            </div>
            <div class="card">
                <img src="images/img10.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <div class="posted-date">
                    <p>Fecha: 12/10/2023</p>
                </div>
                <p class="text">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Leer mas</button></p>
            </div>
        </div>
    </section>
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
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
   <script src="js/script2.js"></script>
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