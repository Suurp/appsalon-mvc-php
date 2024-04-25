<h1 class="nombre-pagina">Olvide la Contraseña</h1>
<p class="descripcion-pagina">Restablece tu contraseña escribiendo tu email</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<form action="/olvide" class="formulario" method="post">
    <div class="campo">
        <label for="email">E-mail:</label>
        <input type="email" id="email" placeholder="Tu E-mail" name="email" />
    </div>

    <input type="submit" class="boton" value="Reestablecer Contraseña">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>