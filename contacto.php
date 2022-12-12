<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Poopins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Real State</title>
    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <?php
        include "admin/class/Mensaje.php"
    ?>
</head>

<body>
    <header>
    </header>
    <div class="nav_bg">
        <nav class="nav_principal">
            <a href="index.html"><img src="img/logoCompany.jpg" alt="logoCompany"></a>
            <a href="index.html">Principal</a>
            <a href="comprar.html">Comprar</a>
            <a href="Alquilar.html">Alquilar</a>
            <a href="contacto.php">Contacto</a>
            <!-- <a href="index.html"><img class="icon" src="img/person-circle.svg" alt="login">Acceder</a> -->
            <a href="admin/pages/index.php"><i class="bi bi-person-circle"></i>Acceder</a>
        </nav>
    </div>
    <!-- Contacto -->
    <section class="contenedor contenido">
        <h2>Contacto</h2>

        <div class="contacto_grid">

            <form class="form" action="admin/controller/mensaje.php" method="post">
                <legend>Formulario para consultas</legend>
                <div>

                    <div class="form_campo">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" name="nombre" class="form_text" type="text" placeholder="Nombre">
                    </div>

                    <div class="form_campo">
                        <label for="telefono">Telefono</label>
                        <input id="telefono" name="telefono" class="form_text" type="text" placeholder="Telefono">
                    </div>

                    <div class="form_campo">
                        <label for="correo">Correo</label>
                        <input id="correo" name="correo" class="form_text" type="text" placeholder="Correo">
                    </div>

                    <div class="form_campo">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form_text" name="mensaje" id="mensaje" placeholder="Ingrese su mensaje"></textarea>
                    </div>


                </div>

                <div>
                    <input class="boton_enviar" type="submit" value="Enviar">
                </div>

            </form>

            <div class="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d9148.842437060888!2d-83.93395797478628!3d9.863434608607038!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scr!4v1669002136105!5m2!1ses!2scr"
                    width="700" height="600" style="border:0;" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </div>

    </section>


    <footer class="contenedor footer_top">

        <div class="informacion_contacto">
            <div>
                <p>Direccion: San Jose</p>
                <p>Avenida No.8</p>
                <p>Oficentro Eco</p>
            </div>

            <div class="info_contacto">
                <p> <i class="bi bi-telephone-fill"></i> Telefono (506) 2565-8965</p>
                <p> <i class="bi bi-phone-fill"></i> WhatsApp (506) 8565-8965</p>
                <p> <i class="bi bi-globe2"></i></i> www.ecorealstate.com</p>
                <p> <i class="bi bi-envelope-fill"></i> hola@ecorealstate.com</p>
            </div>

            <div class="redes_sociales">
                <img src="img/facebook.png" alt="">
                <img src="img/instagram.png" alt="">
                <img src="img/twitter.png" alt="">
                <img src="img/youtube.png" alt="">
            </div>

        </div>

        <div class="derechos">
            <p class="footer"> Todos los derechos reservados. Eco RealState 2022</p>
        </div>

    </footer>

</body>

</html>