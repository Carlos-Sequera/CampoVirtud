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
    <title>Campo Virtud</title>
    <style>
         :root{
        --blanco: #FFF;
        --negro: #000;
        --verde: green;
        --fuenteParrafo: 'Proza Libre', sans-serif;
        --fuenteFooter:  'Times New Roman', Times, serif; 
        --fuentesecundaria:'Staatliches', cursive;
        --boxShadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        --darkGreen: rgba(16, 95, 2, 0.727);

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
        
        body{
            font-family: "Rubik", sans-serif;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
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
            max-width: 100%;
        }

            .header-nav .logo{
                text-align: center;
            }

            .header-nav .logo a{
                text-align: center;
                margin: 0 auto;
            }
            
            .logo img {
                width: 10%;
                max-width: 30%;
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
            .shopping-cart .box-container .box input[type="number"]{
                max-width:80%;
            }
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

            .header-nav .logo{
                text-align: center;
            }
            
            .logo img {
                width: 80%;
            }

        }

        @media only screen and (max-width: 900px) {
            .header-nav .logo{
                text-align: center;
            }
            
            .logo img {
                width: 50%;
            }

        }
        @media only screen and (max-width: 768px) {
            .header-nav .logo{
                text-align: center;
            }
            
            .logo img {
                width: 70%;
            }

        }
        .nav_contenedor{
            padding-top: 1.5rem;
            max-width: 135rem;
            width: 90%;
            margin: 0 auto;
            color: #333;
        }
        .sobre__nosotros-palabras {
            padding-top: 50px;
            text-transform: uppercase;
            text-align: justify;
        }

        @media(min-width: 768px) {
            .sobre__nosotros {
                padding-top: 2.5rem;
                font-size: 1.8rem;
                font-family: Helvetica;
                text-align: justify;
                display: grid;
                grid-template-columns: 1fr 3fr;
                gap: 1rem;
            }
        }

        .fa-sharp:hover .fa-solid:hover .fa-cart-shopping:hover{
            background-color: green;
        }

        @media(max-width: 768px) {
            .sobre__nosotros {
                padding-top: 2.5rem;
                font-size: 1.8rem;
                font-family: Helvetica;  
                text-align: justify;       
            }
        }
        .main{
            padding: 3rem;
        }
        .titulo p{
            text-align: center;
            font-size: 1.8rem;
        }
        .container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 0 20px;
		}
		.card {
			width: 100%;
			height: 400px;
			background-color: var(--verde);
			border-radius: 4px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			display: flex;
			flex-direction: row-reverse;
			overflow: hidden;
            margin-top: 25px;
            color: var(--blanco);
		}
		.card-image {
			width: 50%;
			height: 100%;
			overflow: hidden;
		}
		.card-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.card-content {
			width: 50%;
			padding: 32px;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}
		.card-header {
			font-size: 32px;
			font-weight: bold;
			margin-bottom: 16px;
		}
		.card-text {
			flex-grow: 1;
			font-size: 18px;
			line-height: 1.5;
		}
		.card-actions {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
            background-color: rgb(9, 128, 0);
		}
		.card-action-button {
            background-color: rgb(9, 128, 0);
			color: #fff;
			border: none;
			border-radius: 4px;
			padding: 12px 24px;
			font-size: 18px;
			cursor: pointer;
		}
		.card-action-button:hover {
			background-color: #3e8e41;
		}

        .menu2 {
            height: 100vh;
            max-height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: var(--verde);
            transition: left 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }
    
    .menu2.active {
        left: 0;
    }
    
    .menu2 h2 {
        color: white;
        font-size: 24px;
        margin-bottom: 20px;
        opacity: 0;
        animation: fadeIn 0.5s forwards;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .menu2 ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        text-align: center;
    }
    
    .menu2 ul li {
        padding: 20px;
        text-align: center;
        position: relative;
        opacity: 0;
        animation: fadeIn 0.5s forwards;
        animation-delay: 0.2s;
        background-color: var(--verde);
    }
    
    .menu2 ul li:nth-child(1) {
        animation-delay: 0.3s;
    }
    
    .menu2 ul li:nth-child(2) {
        animation-delay: 0.4s;
    }
    
    .menu2 ul li:nth-child(3) {
        animation-delay: 0.5s;
    }
    
    .menu2 ul li:nth-child(4) {
        animation-delay: 0.6s;
    }
    
    .menu2 ul li a {
        text-decoration: none;
        color: white;
        display: block;
        font-size: 22px; /* Tamaño de letra aumentado */
        transition: all 0.3s ease;
        padding: 1.5rem;
        background-color: var(--verde);
    }
    
    .menu2 ul li a:hover {
        background-color: rgba(0, 128, 49, 0.804);
        transform: translateX(5px);
        padding: 1.5rem;
    }
    
    .dropdown-content {
        display: none;
        background-color: darkgreen;
        position: absolute;
        top: 0;
        left: 100%;
        min-width: 200px;
        padding: 10px;
        border-radius: 0 5px 5px 5px;
    }
    
    .menu2 ul li:hover .dropdown-content {
        display: block;
        padding: 1.5rem;
        background-color: var(--verde);
    }
    
    .dropdown-content a {
        color: white;
        padding: 10px;
        text-decoration: none;
        display: block;
        background-color: var(--darkGreen);
    }
    
    .dropdown-content a:hover {
        background-color: var(--verde);
    }
    
    .menu-toggle {
        cursor: pointer;
        padding: 15px;
        background-color: var(--verde);
        color: white;
        border: none;
        outline: none;
        position: absolute;
        top: 20px;
        right: -50px;
        z-index: 999;
        font-size: 24px; /* Tamaño de fuente aumentado */
    }
    
    .close-btn2 {
        cursor: pointer;
        padding: 15px;
        background-color: var(--verde);
        color: white;
        border: none;
        outline: none;
        position: absolute;
        top: 20px;
        right: 0;
        z-index: 999;
    }
    @media only screen and (max-width: 768px) {
            .card {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .card-image {
                order: -1;
                margin-bottom: 1rem;
            }

            .card-image img{
                margin-top: 1rem;
                width:100%;
                max-height: 100%;
            }

            .card-content {
                width: 100%;
            }
     }

     .shopping-cart .box-container{
        max-width: 120rem;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem,1fr));
        align-items: 1.5rem;
        justify-content: center;
        gap: 2rem;
     }

     .shopping-cart .box-container .box{
        text-align: center;
        padding: 2rem;
        border-radius: .5rem;
        background-color: var(--blanco);
        box-shadow: var(--boxShadow);
        position: relative;
        border: 1px solid black;
     }

     .shopping-cart .box-container .box img{
        height: 50rem;
        width: 100%;
     }

     .shopping-cart .box-container .box .nombre{
        padding: 1rem 0;
        font-size: 2.5rem;
        color: var(--negro);
     }

     .shopping-cart .box-container .box .precio{
        padding: 1rem 0;
        font-size: 2.5rem;
        color: var(--negro);
     }

     .shopping-cart .box-container .box input[type="number"]{
        margin: 1.5rem;
        border: 1px solid black;
        border-radius: .5rem;
        padding: 1.2rem 1.5rem;
        font-size: 2rem;
        color: var(--negro);
        width: 30rem;
     }

     .shopping-cart .cart-total {
        max-width: 120rem;
        margin: 0 auto;
        border: 1px solid black;
        padding: 2rem;
        text-align: center;
        border-radius: .5rem;
        margin-top: 2rem;
     }

     .shopping-cart .cart-total p{
        font-size: 2.5rem;
     }

     .shopping-cart .cart-total p span{
        color: var(--verde);
     }
     .shopping-cart .cart-total .flex{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: 1.5rem;
     }
     .shopping-cart .option-btn{
        font-size: 2rem;
     }

     .shopping-cart .cart-total .flex .btn{
        font-size: 2rem;
        background-color: var(--negro);
     }

     .shopping-cart .cart-total .flex .btn:hover{
        background-color: rgba(0, 0, 0, 0.446);
     }

    .contactos h1{
        text-align: center;
        font-size: 4rem;
    }

    .contactos .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .contactos .container form .row{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        gap: 1rem;
    }

    .contactos .container form .row input{
        width: 100%;
        padding: 1.2rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 2rem;
    }

    .col-75 {
        font-size: 2rem;
        margin-top: 1.2rem;
    }

    select, textarea{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    .button{
        margin-top: 1rem;
        display: flex;
        justify-content: center;
        
    }

    .button input[type=submit]{
        background-color: var(--verde);
        color: var(--blanco);
        padding: 1.8rem 5rem;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        float: center;
        font-size: 2rem;
    }

    .button input[type=submit]:hover{
        background-color: darkgreen;
    }
    </style>
</head>
<body>