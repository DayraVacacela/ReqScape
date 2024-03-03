<head>
<link rel="stylesheet" type="text/css" href="../../styles/juego-nivel6.css">
</head>

<div class="fila1">
    <div class="cash">
    210
    </div>
    <div class="coin">
        <img src="../../assets/img/juego-lvl1/coin.png" alt="">
    </div>
</div>
<div class="fila2">
    <span class="titulo-nivel-txt">
        Nivel 06
    </span>
</div>
<!--  
<div class="contenedor">
    <div class="opts-cl1">
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="titulo" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="texto" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="tipo" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="det-req-rest" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="fecha" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="prioridad" placeholder="Escribe aquí...">
        </div>    
    </div>
    <div class="opts-cl2">
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
        <div class="input">
            <input type="text" name="numero" placeholder="Escribe aquí...">
        </div>
    </div>
</div>-->
<div class="contendedor-principal">
    <div class="contenedor">
        <table class="mi-tabla">
        <tr>
            <td colspan="2"> El requeimiento es: RF-1: EL SISTEMA DEBE PERMITIR A LOS USUARIOS REALIZAR BÚSQUEDAS EFICIENTES DE LIBROS.</td>
        </tr>
        <tr>
            <td contenteditable="true"></td>
            <td class="dropzone"></td>
        </tr>
        <tr>
            <td contenteditable="true"></td>
            <td class="dropzone"></td>
        </tr>
        <tr>
            <td contenteditable="true"></td>
            <td class="dropzone"></td>
        </tr>
        <tr>
            <td contenteditable="true"></td>
            <td class="dropzone"></td>
        </tr>
        <tr>
            <td contenteditable="true"></td>
            <td class="dropzone"></td>
        </tr>
        <tr>
            <td contenteditable="true"></td>
            <td class="dropzone"></td>
        </tr>
        <tr>
            <td contenteditable="true"></td>
            <td class="dropzone"></td>
        </tr>
        </table>
    </div>
    <div class="contenedor">
        <div class="opciones">
                <div class="opcion" draggable="true">Opción 1</div>
                <div class="opcion" draggable="true">Opción 2</div>
                <div class="opcion" draggable="true">Opción 3</div>
                <div class="opcion" draggable="true">Opción 4</div>
                <div class="opcion" draggable="true">Opción 5</div>
                <div class="opcion" draggable="true">Opción 6</div>
                <div class="opcion" draggable="true">Opción 7</div>
        </div>
    </div>
</div>
<!-- Botón para enviar el formulario -->
<form action="score-page.php" method="post" class="boton-env">
        <button type="submit" class="btn-enviar">Enviar respuestas</button>
    </form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const dropzones = document.querySelectorAll('.dropzone');

    dropzones.forEach(dropzone => {
        dropzone.addEventListener('dragover', e => {
            e.preventDefault(); // Evita el comportamiento predeterminado
        });

        dropzone.addEventListener('drop', e => {
            e.preventDefault(); // Evita el comportamiento predeterminado
            const draggedElement = document.querySelector('.dragging');

            if (draggedElement) {
                dropzone.appendChild(draggedElement);
                draggedElement.classList.remove('dragging');
            }
        });
    });

    const opciones = document.querySelectorAll('.opcion');

    opciones.forEach(opcion => {
        opcion.addEventListener('dragstart', e => {
            opcion.classList.add('dragging');
        });

        opcion.addEventListener('dragend', e => {
            opcion.classList.remove('dragging');
        });
    });
});
</script>
