<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="descripcion__texto">Coloca tu nuevo password</p>
    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <?php if ($token_valido) { ?>

        <form method="POST" action="" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nuevo Password: </label>
                <input id="password" name="password" type="password" class="formulario__input" placeholder="Tu nuevo password">
            </div>

            <input type="submit" class="formulario__submit" value="Guardar Password" />
        </form>
    <?php } ?>

    <div class="acciones">

        <a href="/registro" class="acciones__enlace">¿Aun no tienes cuenta? Crea una</a>
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia session</a>
    </div>
</main>