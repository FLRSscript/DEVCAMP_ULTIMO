<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="descripcion__texto">Registrate en DevWebCamp</p>

    <?php
    require_once  __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/registro" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre:</label>
            <input id="nombre" name="nombre" type="text" class="formulario__input" placeholder="Tu nombre" value="<?php echo $usuario->nombre?>">
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido:</label>
            <input id="apellido" name="apellido" type="text" class="formulario__input" placeholder="Tu apellido" value="<?php echo $usuario->apellido?>">
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email:</label>
            <input id="email" name="email" type="email" class="formulario__input" placeholder="Tu email" value="<?php echo $usuario->email?>">
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password:</label>
            <input id="password" name="password" type="password" class="formulario__input" placeholder="Tu password">
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password:</label>
            <input id="password2" name="password2" type="password" class="formulario__input" placeholder="Repite tu password">
        </div>
        <input type="submit" class="formulario__submit" value="Crear Cuenta" />
    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia Session</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>