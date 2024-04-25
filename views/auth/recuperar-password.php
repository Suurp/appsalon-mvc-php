<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<?php if ($error) return null ?>

<form class="formulario" method="post">
    <div class="campo">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Tu nuevo password">
    </div>
    <input type="submit" class="boton" value="Guardar nuevo Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>