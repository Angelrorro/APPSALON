<h1 class="nombre-pagina">Recuperar password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if ($error) return ;?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu password">
    </div>

    <input type="submit" class="btn" value="Guardar nuevo password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Obtener una</a>
</div>