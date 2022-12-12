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
  <title>Eco Real State</title>
  <!-- icons bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../styles.css">
  <title>Eco-RealState - Admin</title>
  <?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("location: index.php?error=1");
    exit();
  }
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

  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../../img/carrusel/oferta01.jpg" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h2>Los Angeles</h2>
          <!-- <p>We had such a great time in LA!</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="../../img/carrusel/oferta02.jpg" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h2>Chicago</h2>
          <!-- <p>Thank you, Chicago!</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="../../img/carrusel/oferta03.jpg" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h2>New York</h2>
          <!-- <p>We love the Big Apple!</p> -->
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>




  <section class="contenedor contenido">
    <h2>Datos de inicio</h2>
    <br>
    <br>
    <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    <br>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <br>
    <p>Ut vestibulum sapien mollis justo fermentum faucibus. Sed et aliquet ligula, fringilla semper ipsum. Ut auctor velit nec arcu vehicula hendrerit. Nam in sodales tortor. Ut sit amet tellus efficitur, hendrerit ante rhoncus, commodo velit. Aenean mauris lectus, vehicula nec accumsan a, sodales at neque. Integer venenatis rhoncus justo, interdum feugiat orci. Phasellus euismod lobortis nulla, dapibus dictum sapien varius vitae.</p>
    <br>
    <p>Vivamus lobortis enim nec massa posuere cursus. Donec accumsan cursus urna iaculis accumsan. Maecenas luctus vitae purus id dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque vel sapien metus. Aliquam et rhoncus enim. Mauris nisi lorem, varius at turpis dapibus, porta efficitur tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam vel porttitor metus. Donec blandit id felis non varius. Etiam bibendum est metus, at tempor metus facilisis a. Fusce quis felis blandit, porttitor lectus sit amet, rhoncus neque. Etiam sodales elementum urna eget venenatis. Integer ut pharetra tellus. Cras sit amet augue id dolor ultrices luctus ut vitae libero. Morbi feugiat velit non tincidunt vehicula.</p>
  </section>

  <footer class="contenedor footer_top">
    <div class="user">
      <p>User: <span>
          <?php
          echo $_SESSION["usuario"];
          ?>
        </span>
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