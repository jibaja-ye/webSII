<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontello.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>


    <header class="header" id="inicio">


        <div class="menu container">

            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>

            <nav class="navbar">

                <ul>
                    <li> <a href="#inicio">inicio</a> </li>
                    <li> <a href="#servicios">servicios</a> </li>
                    <li> <a href="#nosotros">Nosotros</a> </li>
                    <li> <a href="#contactanos">Contactanos</a> </li>
                </ul>
            </nav>

        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Servicio profesional</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem consequatur cumque saepe dignissimos
                    est reiciendis, eum tempora quas temporibus nostrum nobis tenetur eaque sint. Sapiente tempore qui
                    sunt nulla repellendus?
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="info-img">
                <img src="imagenes/info.png" alt="">
            </div>
            </a>
        </div>

    </header>
    <section class="info container" id="nosotros">
        <div class="info-img">
            <img src="imagenes/estructurado.jpg" alt="">
        </div>
        <div class="info-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque odio adipisci laborum ipsa
                excepturi dignissimos eveniet quibusdam iste, amet quae iusto, sint quas omnis vitae eum harum,
                cupiditate repudiandae sapiente.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque odio adipisci laborum ipsa
                excepturi dignissimos eveniet quibusdam iste, amet quae iusto, sint quas omnis vitae eum harum,
                cupiditate repudiandae sapiente.
            </p>
        </div>
    </section>
    <main class="servicios" id="servicios">
        <h2>Servicios</h2>
        <div class="serv-content container">
            <div class="servicio-1">
                <i class="fa-solid fa-ethernet"></i>
                <h3>Cableado Estructurado</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-camera-retro"></i>
                <h3>Sistema CCTV</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-desktop"></i>
                <h3>Mantenimiento de equipos</h3>
            </div>
        </div>
    </main>
    <section class="formulario container" id="contactanos">
        <form method="post" autocomplete="off">
            <h2>Solicita mas Informacion</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="txt" name="name" placeholder="nombre y apellidos">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="number" name="phone" placeholder="telefono cel">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="txt" name="email" placeholder="correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Detalles"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">

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
                    <li> <a href="#inicio">inicio</a> </li>
                    <li> <a href="#servicios">servicios</a> </li>
                    <li> <a href="#nosotros">Nosotros</a> </li>
                    <li> <a href="#contactanos">Contactanos</a> </li>
                </ul>
            </div>

        </div>

    </footer>
    <div class="whsp">
        <a href="https://api.whatsapp.com/send?phone=+51931560673" class="btn-wsp" target="_blank">

            <img src="imagenes/whapp.png" class="img-fluit">
        </a>
    </div>

    <?php
include ("php/send.php");
?>
    <script>
    function myFunction() {
        window.location.href = "http://localhost/webSII"
    }
    </script>
</body>

</html>