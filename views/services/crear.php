<h1 class="nombre-pagina">Nuevo servicio</h1>
<p class="descripcion-pagina">Llena todos los campos para añadir un nuevo servicio</p>

<?php
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/services/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="btn" value="Guardar servicio">
</form>