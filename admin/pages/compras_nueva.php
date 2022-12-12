<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Eco Real State - Compras</title>
    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles.css">
    <title>Eco-RealState - Compras</title>
    <?php
        session_start();
        if (!isset($_SESSION["login"])) {
            header("location: index.php?error=1");
            exit();
        }
        include "../class/Compra.php"
    ?>
</head>

<body>
    <header>
        <h1>Eco-RealState Administration</h1>
    </header>

    <div class="nav_bg">
        <nav class="nav_principal contenedor">
            <a href="admin.php">Pagina de Inicio</a>
            <a href="compras.php">Comprar</a>
            <a href="alquileres.php">Alquileres</a>
            <a href="mensajes.php">Mensajes</a>
            <a href="../controller/logout.php">Finalizar Sesión</a>
        </nav>
    </div>

    <form class="formNew" action="../controller/compra.php" method="post">
            <legend>Nuevo Lugar de compra</legend>
            <div>
                <div class="form_campo">
                    <label for="titulo">Titular: </label>
                    <input id="titulo" name="titulo" class="form_text" type="text" 
                    placeholder="Ingrese el nombre del Lugar">
                </div>
                

                <div class="form_campo">
                    <label for="direccion">Direccion: </label>
                    <input id="direccion" name="direccion" class="form_text" type="text" 
                    placeholder="Ingrese la Direccion">
                </div>
                <div class="form_campo">
                    <label for="caracteristicas">Caracteristicas: </label>
                    <textarea class="form_text" name="caracteristicas" id="caracteristicas" 
                    placeholder="Ingrese las caracteristicas del Lugar"
                    ></textarea>
                </div>

                <div class="form_campo">
                    <label for="contacto">Contacto: </label>
                    <input id="contacto" name="contacto" class="form_text" type="text" 
                    placeholder="Ingrese el contacto del Lugar">
                </div>
            </div>
            <div>
                <button class="boton_crear" type="submit">Crear</button>
            </div>
        </form>



        <footer class="contenedor footer_top">
        <div class="User: ">
            <p>User: 
                <?php
                echo $_SESSION["usuario"];
                ?>
            </p>
        </div>

      <div class="informacion_contacto">
          <div>
              <p>Direccion: San Jose</p>
              <p>Avenida No.8</p>
              <p>Oficentro Eco</p>
          </div>

          <div class="info_contacto">
              <p> <i class="bi bi-telephone-fill"></i> Telefono (506) 2565-8965</p>
              <p> <i class="bi bi-phone-fill"></i> WhatsApp (506) 8565-8965</p>
              <p> <i class="bi bi-globe2"></i></i> www.eco-realstate.com</p>
              <p> <i class="bi bi-envelope-fill"></i> hola@eco-realstate.com</p>
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