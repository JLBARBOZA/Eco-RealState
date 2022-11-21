<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style2.css">
    <title>Eco-RealState - Login</title>
</head>

<body class="login">

    <section class="contenedor contenido">
        <form class="a" action="../controller/login.php" method="post">
        <div class="form">
            <div class="title">Inicio de sección</div>
            <div class="input-container ic1">
                
                    <label for="usuario">Usuario:</label>
                    
                    <input id="usuario" name="usuario" class="input" type="text" 
                    placeholder="Ingrese su usuario">
                    <label for="contrasena">Contraseña:</label>
                    
                    <input id="contrasena" name="contrasena" class="input" 
                    type="password" placeholder="Ingrese su contraseña">

                    <a href="../../index.html">Preview</a>
                </div>

            </div>

            <div>
                <button class="submit" type="submit">Ingresar</button>
            </div>
        </form>

        <?php
            if (isset($_GET["error"])) {
                switch ($_GET["error"]) {
                    case '1':
                        echo "<p class='text-tertiary'>* No autorizado</p>";
                        break;
                    case '2':
                        echo "<p class='text-tertiary'>* Se requiere usuario y contraseña</p>";
                        break;
                    case '3':
                        echo "<p class='text-tertiary'>* Credenciales invalidos</p>";
                        break;
                }
            }
        ?>

    </section>

</body>

</html>