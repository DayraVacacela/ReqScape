<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReqScape</title>
    <link rel="stylesheet" type="text/css" href="../../styles/inicio.css">
</head>
<body>
    <div class="fondo">
        <div class="columna-1">
            <div class="fila1-cl1"></div>
            <div class="fila2-cl1">
                <button class="lg-cl1">
                    <img src="../../assets/img/inicio/inicio.png" alt="">
                </button>
                <button class="lg-cl1">
                    <img src="../../assets/img/inicio/niveles.png" alt="">
                </button>
                <button class="lg-cl1">
                    <img src="../../assets/img/inicio/scoreglobal.png" alt="">
                </button>
                <button class="lg-cl1">
                    <img src="../../assets/img/inicio/perfil.png" alt="">
                </button>
                <button class="lg-cl1">
                    <img src="../../assets/img/inicio/info.png" alt="">
                </button>
                <button class="lg-cl1">
                    <img src="../../assets/img/inicio/log-out.png" alt="">
                </button>
            </div>
        </div>
        <div class="columna-2">
            <div class="fila1-cl2">
                <div class="logo">
                    <img src="../../assets/img/logo.png" alt="">
                </div>
                <div class="botoneslog">
                    <form action="inicio-sesion.php" method="GET">
                            <button type="submit" class="inicio-sesion">Iniciar sesión</button>
                    </form>
                    <form action="registro.php" method="GET">
                            <button type="submit" class="registrarse" name="registrarse">Registrarse</button> 
                    </form>
                </div>
            </div>
            <div class="fila2-cl2">
                <div class="contenido-juego">
                    <div class="logo-inicial">
                        <img src="../../assets/img/inicio/logoinicio.png" alt="">
                    </div>
                    <div class="btn-juego-principal">
                        <button class="btn-practica">Práctica</button>
                        <form action="level1-txt.php" method="GET">
                            <button type="submit" class="btn-jugar" name="jugar">Jugar</button>
                        </form>
                    </div>
                   
            
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once '../../connection/connection.php';
   
    ?>
</body>
</html>