<div class="barra">
    <p>Hola <?php echo $nombre ?? ''; ?></p>
    <a href="/logout" class="btn">Cerrar sesión</a>
</div>

<?php if(isset($_SESSION['admin'])) { ?>
    <div class="barra-servicios">
        <a href="/admin" class="btn">Ver Citas</a>
        <a href="/services" class="btn">Ver servicios</a>
        <a href="/services/crear" class="btn">Nuevo servicio</a>
    </div>
    
<?php } ?>