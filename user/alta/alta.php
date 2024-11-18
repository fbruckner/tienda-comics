<?php
require_once("../../components/conf.php");

$titulo;
$contenido;
$imagen;
$deporte;
$usuario;
if(isset($_POST['titulo']) or isset($_POST['contenido']) or isset($_FILES['imagen']) or isset($_POST['deporte']) or isset($_POST['usuario'])){

    $titulo = mysqli_real_escape_string($con,$_POST['titulo']);
    $contenido = mysqli_real_escape_string($con,$_POST['contenido']);
    $imagen = mysqli_real_escape_string($con,$_POST['imagen']);
    $deporte = mysqli_real_escape_string($con,$_POST['deporte']);
    $usuario = mysqli_real_escape_string($con,$_POST['usuario']);

    $imagen = time().".jpg";

    $temporal = $_FILES ['imagen']['tmp_name'];

    move_uploaded_file($temporal,"../../imgs/$imagen");

    $consulta = "INSERT INTO `articulos`( `titulo`, `cuerpo`, `fecha_creacion`, `fecha_actualizacion`, `imagen`, `fk_deporte`, `fk_usuario`) VALUES ('$titulo','$contenido',NOW(),NOW(),'$imagen','$deporte','$usuario')";

    mysqli_query($con,$consulta);

    header("Location: ../panel.php");
}
?>