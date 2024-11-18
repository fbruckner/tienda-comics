<?php
include_once("../components/header.php");
?>
<section class="row">
    <article class="col-6">
<h2>Registrarse</h2>
<?php
if(isset($_GET['error_uno'])){
    print "<p style=color:red>Todos los campos son obligatorios!!!</p>";
}
if(isset($_GET['error_dos'])){
    print "<p style=color:red>Las contraseñas no son iguales!!!</p>";
}
if(isset($_GET['error_tres'])){
    print "<p style=color:red>El mail ya existe!!!</p>";
}
if(isset($_GET['reg'])){
    print "<p style=color:green>Te podes loguear!!!</p>";
}
?>

<form action="../components/security/alta_usuario.php" method="post">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
    </div>
    <div>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido">
    </div>
    <div>
        <label for="email">Correo:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave">
    </div>
    <div>
        <label for="clave_dos">Repetir contraseña:</label>
        <input type="password" name="clave_dos" id="clave_dos">
    </div>
    <div>
        <input type="submit" value="Registrarme" class="boton">
    </div>
</form>
</article>
<article class="col-6">
<h2>Login</h2>
<?php
if(isset($_GET['log'])){
    print "<p style=color:red>El usuario no está registrado!!!</p>";
}
if(isset($_GET['bann'])){
    print "<p style=color:red>El usuario está banneado!!!</p>";
}
if(isset($_GET['pass'])){
    print "<p style=color:red>La contraseña no es correcta!!!</p>";
}
?>
<form action="../components/security/login.php" method="post">
    <div>
        <label for="usuario">Usuario:</label>
        <input type="email" name="usuario" id="usuario">
    </div>
    <div>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">
    </div>
    <div>
        <input type="submit" value="Ingresar" class="boton">
    </div>
</form>
</article>
</section>

<?php
include_once("../components/footer.php");
?>

<style>
    h2{
        color:orange;
    }
    .boton{
            background-color:orange;
            color:white;
            margin:5px;
            padding:10px;
            font-weight:bold;
            font-size: 15px;
            border-radius:5px;

        }
        .boton:hover{
            background-color:white;
            color:orange;
        }
</style>