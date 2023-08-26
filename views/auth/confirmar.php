<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="descripcion__texto">Tu cuenta de WebCamp ha sido confirmada</p>
    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if (isset($alertas['exito'])) { ?>

        <div class="acciones acciones--centrar">

            <a href="/login" class="acciones__enlace">Iniciar session</a>
        </div>

    <?php  } ?>
</main>