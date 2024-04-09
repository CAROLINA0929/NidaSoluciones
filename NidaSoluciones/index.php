<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NidaSoluciones</title>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="Inicio">
              
        <div class="menu container">
            <a href="#" class="logo">
                <img src="images/image001.png" alt="logo">
            </a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">          
              </label>
            <nav class="navbar">
               <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Quines Somos</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contactanos</a></li>
               </ul> 
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1> Soluciones Nida S A S</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Odit modi, aliquid quae rerum quod placeat aspernatur! 
                    Perferendis maxime quia, dolore ullam corrupti maiores 
                    assumenda similique alias, ex, delectus adipisci odit!
                </p>
                <a href="#" class="btn-1">Información</a>
                <div class="header-img">
                    <img src="images/8ed044e7-62ea-4dbc-8429-9b2a2975c9d1.jpg" alt="image">

                </div>
         </div>

    </div>
        </header>
    


<section class="about conteiner">

    <div class="about-img">
        <img src="images/2sst.png.png" alt="">
    </div>
    <div class="about-txt">
        <h2>Nosotros</h2>
        <p>
         esta empresa se compone de un equipo profesional multidisciplinario
        que ofrece asesoría especializada en diferentes áreas del conocimiento
         para respaldar el éxito y la legalidad de sus 
         clientes empresariales. 🌟  
        </p>
        <br>
        <p>
            esta empresa se compone de un equipo profesional multidisciplinario
        que ofrece asesoría especializada en diferentes áreas del conocimiento
         para respaldar el éxito y la legalidad de sus 
         clientes empresariales. 🌟
        </p>
        <br>
        <p>
            esta empresa se compone de un equipo profesional multidisciplinario
        que ofrece asesoría especializada en diferentes áreas del conocimiento
         para respaldar el éxito y la legalidad de sus 
         clientes empresariales. 🌟
        </p>
    </div>
</section>
       
<main class="Servicios">

    <h2>servicios<h2>

        <div class="servicios-content conteiner">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i> 
                <h3>salud</h3>  
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-money-bill"></i> 
                <h3>Contable</h3>   
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-legal"></i> 
                <h3>Juridica</h3>   
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-brain"></i> 
                <h3>Psicologia</h3>   
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-hard-hat"></i> 
                <h3>Sst</h3>   
            </div>

</main>

<section class="formulario container">

    <form action="send.php"  method="POST" autocomplete="off">

        <h2> Solicita Información</h2>

        <div class="input-group">
            
         <div class="input-group">
            <div class="input-container">
                <input type="text" name="nombre" placeholder="nombre">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="tel" name="telefono" placeholder="telefono">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-container">
                <input type="e-mail" name="email" placeholder="email">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <textarea name="mensaje" placeholder="Detalles de la Consulta"></textarea>
            </div>
            <input type="submit" name="send"  class="btn" onClick="myFunction()">
        </div> 
    </form>
</section>

<footer class="footer">
    <div class="footer-content container">

        <div class="link">
           <a href="#" class="logo">logo</a>
        </div>
    <div class="link">
        <ul>
            <li> <a href="#">Inicio</a></li>
            <li> <a href="#">Quienes Somos</a></li>
            <li> <a href="#">Servicios</a></li>
            <li> <a href="#">Contactenos</a></li>
        </ul>
    </div>
    </div>
</footer>

<?php
    include("send.php");
    ?>

    <script>
        function myFunction() {
          window.location.href="http://localhost/NidaSoluciones.php"  
        }
    </script>

</body>
</html>