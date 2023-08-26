<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="descripcion__texto">Recuperar Acceso</p>
    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <form method="POST" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input id="email" name="email" type="email" class="formulario__input" placeholder="Tu email">
        </div>

        <input type="submit" class="formulario__submit" value="Enviar instruccciones" />
    </form>
    <div class="acciones">

        <a href="/registro" class="acciones__enlace">¿Aun no tienes cuenta? Crea una</a>
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia session</a>
    </div>
</main>