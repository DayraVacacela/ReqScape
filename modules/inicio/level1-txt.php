
<head>
<link rel="stylesheet" type="text/css" href="../../styles/level-txt.css">
</head>
<div class="fila1">
    <span class="titulo-nivel-txt">
        Nivel 01
    </span>
</div>
<div class="fila2">
    <div class="fila2-1">
        <span class="texto1-txt">
        <?php
            // Verifica si se ha enviado la solicitud POST
            if(isset($_POST['cambiarTexto'])) {
                // Imprime el nuevo texto
                echo "TU PRIMERA TAREA ES CATEGORIZAR LOS REQUERIMIENTOS DEL CLIENTE EN AMBIGUOS Y NO AMBIGUOS.";
            if($_POST['cambiarTexto'] === 'TU PRIMERA TAREA ES CATEGORIZAR LOS REQUERIMIENTOS DEL CLIENTE EN AMBIGUOS Y NO AMBIGUOS.')  {
                // Redirige a otro archivo PHP
                header("Location: juego-nivel1.php");
            }
            }else {
                // Texto inicial
                echo "ERES UN INGENIERO DE REQUERIMIENTOS Y TE PROPONEN 6 TAREAS QUE TE AYUDARÁN A ASCENDER DE PUESTO…";
            }
            
            ?>
           
        </span>
    </div>
    <div class="fila2-2">
        <form method="post">
            <button type="submit" class="btn-icono" name="cambiarTexto">
                SALTAR
                <img src="../../assets/img/lever1-txt/saltar_btn.png" alt="Icono" />
            </button>
          
        </form>
    </div>
</div>
